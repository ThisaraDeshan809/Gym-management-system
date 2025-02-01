<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\EquipmentReserve;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class equipmentController extends Controller
{
    public function user_equipments_page()
    {
        $equipments = Equipment::all();
        return view('dashboards.user.ourEquipments', compact('equipments'));
    }

    public function admin_equipments_page()
    {
        return view('dashboards.admin.equipments');
    }

    public function admin_equipment_reservations_page()
    {
        return view('dashboards.admin.equipmentReservations');
    }

    public function get_equipments()
    {
        $equipments = Equipment::all();
        return datatables()->of($equipments)
            ->addColumn('action', function ($row) {
                $btn = '<button type="button" class="bg-gradient-to-tl from-[#e38d24] to-[#f7b615] text-black font-semibold py-2 px-3 rounded-full inline-block cursor-pointer btn_view_equipment m-1" data-id="' . $row->id . '">View</button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function get_equipment_reservations()
    {
        $equipment_reservations = EquipmentReserve::from('equipment_reservations as er1')
            ->leftJoin('equipments as e', 'er1.equipment_id', '=', 'e.id')
            ->leftJoin('users as u', 'er1.user_id', '=', 'u.id')
            ->select('e.name as equipment_name', 'u.name as user_name', 'er1.*')
            ->get();

        return datatables()->of($equipment_reservations)
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

    public function add_new_equipment(Request $request)
    {
        try {
            $request->validate([
                'equipment_name' => 'required',
            ]);

            DB::beginTransaction();

            $request->hasFile('image');
            $request->file('equipment_image')->store('public/assets/images/equipments');
            $equipment_image = $request->file('equipment_image')->hashName();

            $equipment = new Equipment();
            $equipment->name = $request->equipment_name;
            $equipment->quantity = $request->quantity;
            $equipment->description = $request->equipment_description;
            $equipment->image = $equipment_image;
            $equipment->save();
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Equipment added successfully'], 200);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Something went wrong' . $e->getMessage()], 500);
        }
    }

    public function add_equipment_reservation(Request $request)
    {
        try{
            $request->validate([
                'equipment_id' => 'required',
                'date' => 'required',
                'time_in' => 'required',
                'time_out' => 'required',
            ]);

            DB::beginTransaction();

            $equipment = new EquipmentReserve();
            $equipment->user_id = Auth::user()->id;
            $equipment->equipment_id = $request->equipment_id;
            $equipment->date = $request->date;
            $equipment->time_in = $request->time_in;
            $equipment->time_out = $request->time_out;
            $equipment->save();

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Reservation added successfully'], 200);
        } catch(Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Something went wrong' . $e->getMessage()], 500);
        }
    }

    public function equipment_reservation_mark_as_complete(Request $request)
    {
        try{
            $id = $request->id;
            $reserve = EquipmentReserve::find($id);
            $reserve->status = 'completed';
            $reserve->save();
            return response()->json(['success' => true, 'message' => 'Reservation Completed'], 200);
        } catch(Exception $e){
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Something went wrong' . $e->getMessage()], 500);
        }
    }

    public function equipment_reservation_cancel(Request $request)
    {
        try{
            DB::beginTransaction();
            $id = $request->id;
            $reserve = EquipmentReserve::find($id);
            $reserve->status = 'cancelled';
            $reserve->save();
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Reservation Cancelled'], 200);
        } catch(Exception $e){
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Something went wrong'], 500);
        }
    }
}
