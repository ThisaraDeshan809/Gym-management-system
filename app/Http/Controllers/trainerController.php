<?php

namespace App\Http\Controllers;

use App\Models\ReserveTrainer;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class trainerController extends Controller
{
    public function trainer_reservations_page()
    {
        return view('dashboards.admin.trainerReservations');
    }

    public function get_trainer_reservations()
    {
        $reservations = ReserveTrainer::with(['user', 'trainer'])->get();
        return datatables()->of($reservations)
            ->addColumn('user_name', function ($row) {
                return $row->user->name;
            })
            ->addColumn('trainer', function ($row) {
                return $row->trainer->name;
            })
            ->addColumn('training_type', function ($row) {
                return '<span class="badge bg-primary">' . $row->type . '</span>';
            })
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn_cancel = '';
                if ($row->status == 'reserved') {
                    $btn = '<button type="button" class="bg-gradient-to-tl from-[#e38d24] to-[#f7b615] text-black font-semibold py-2 px-3 rounded-full inline-block cursor-pointer btn_mark_as_complete m-1" data-id="' . $row->id . '">Mark As Complete</button>';
                }

                if ($row->status == 'reserved') {
                    $btn_cancel = '<button type="button" class="bg-red-700 text-white font-semibold py-2 px-3 rounded-full inline-block cursor-pointer btn_cancel m-1" data-id="' . $row->id . '">Cancel Reservation</button>';
                }

                return $btn . " " . $btn_cancel;
            })
            ->rawColumns(['action', 'training_type'])
            ->make(true);
    }

    public function storeReserve(Request $request)
    {
        // validate request
        $validatedData = $request->validate([
            'trainer_id' => 'required|exists:users,id',
            'training_type' => 'required|string|max:255',
            'date' => 'required|date|after:today',
            'time_in' => 'required',
            'time_out' => 'required|after:time_in',
        ]);

        try {
            DB::beginTransaction();

            // Check if the trainer is available at the requested time
            $existingReservation = ReserveTrainer::where('trainer_id', $validatedData['trainer_id'])
                ->where('date', $validatedData['date'])
                ->where('status', 'reserved')
                ->where(function($query) use ($validatedData) {
                    $query->whereBetween('time_in', [$validatedData['time_in'], $validatedData['time_out']])
                          ->orWhereBetween('time_out', [$validatedData['time_in'], $validatedData['time_out']])
                          ->orWhere(function($q) use ($validatedData) {
                              $q->where('time_in', '<=', $validatedData['time_in'])
                                ->where('time_out', '>=', $validatedData['time_out']);
                          });
                })
                ->first();

            if ($existingReservation) {
                return response()->json([
                    'success' => false,
                    'message' => 'Trainer is not available at the selected time. Please choose a different time.'
                ], 422);
            }

            $reserve = new ReserveTrainer();
            $reserve->user_id = Auth::user()->id;
            $reserve->trainer_id = $validatedData['trainer_id'];
            $reserve->type = $validatedData['training_type'];
            $reserve->date = $validatedData['date'];
            $reserve->time_in = $validatedData['time_in'];
            $reserve->time_out = $validatedData['time_out'];
            $reserve->status = 'reserved';
            $reserve->save();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Reservation successful! Training Type: ' . $validatedData['training_type']
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Reservation failed: ' . $e->getMessage()
            ], 500);
        }
    }

    public function mark_as_complete(Request $request)
    {
        try{
            $id = $request->id;
            $reserve = ReserveTrainer::find($id);
            $reserve->status = 'completed';
            $reserve->save();
            return response()->json(['success' => true, 'message' => 'Reservation Completed'], 200);
        } catch(Exception $e){
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }

    public function cancel_trainer_reservation(Request $request)
    {
        try{
            DB::beginTransaction();
            $id = $request->id;
            $reserve = ReserveTrainer::find($id);
            $reserve->status = 'cancelled';
            $reserve->save();
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Reservation Cancelled'], 200);
        } catch(Exception $e){
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }

    // Get available training types (optional API endpoint)
    public function getTrainingTypes()
    {
        $trainingTypes = [
            'Power Lifting',
            'Body Building',
            'Cardio Program',
            'Strength Training',
            'Weight Loss',
            'Muscle Gain',
            'Functional Training',
            'Sports Specific',
            'Rehabilitation',
            'General Fitness'
        ];

        return response()->json($trainingTypes);
    }
}
