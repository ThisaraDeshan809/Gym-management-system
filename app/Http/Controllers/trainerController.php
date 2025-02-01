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
        $reservations = ReserveTrainer::get();
        return datatables()->of($reservations)
            ->addColumn('user_name', function ($row) {
                $user = User::find($row->user_id);
                return $user->name;
            })
            ->addColumn('trainer', function ($row) {
                $trainer = User::find($row->trainer_id);
                return $trainer->name;
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
            ->rawColumns(['action'])
            ->make(true);
    }

    public function storeReserve(Request $request)
    {
        // validate request
        $validatedData = $request->validate([
            'trainer_id' => 'required',
            'date' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $reserve = new ReserveTrainer();
            $reserve->user_id = Auth::user()->id;
            $reserve->trainer_id = $validatedData['trainer_id'];
            $reserve->date = $validatedData['date'];
            $reserve->time_in = $validatedData['time_in'];
            $reserve->time_out = $validatedData['time_out'];
            $reserve->status = 'reserved';
            $reserve->save();

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Reservation successful'], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Reservation failed' . $e->getMessage()], 500);
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
            return response()->json(['success' => false, 'message' => 'Something went wrong' . $e->getMessage()], 500);
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
            return response()->json(['success' => false, 'message' => 'Something went wrong' . $e->getMessage()], 500);
        }
    }
}
