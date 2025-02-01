<?php

namespace App\Http\Controllers;

use App\Models\EquipmentReserve;
use App\Models\ReserveTrainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservationController extends Controller
{
    public function my_reseravtions_page()
    {
        $trainer_reservations = ReserveTrainer::leftJoin('users', 'trainerreservations.trainer_id', '=', 'users.id')
            ->where('user_id', Auth::user()->id)
            ->select( 'trainerreservations.*', 'users.profile_photo_path as trainer_image','users.name as trainer_name')
            ->get();
        $equipment_reservations = EquipmentReserve::leftJoin('equipments','equipments.id','=','equipment_reservations.equipment_id')
            ->where('user_id', Auth::user()->id)
            ->select('equipments.image as equipment_image','equipments.name as equipment_name','equipment_reservations.*')
            ->get();
        return view('dashboards.user.myReservations', compact('trainer_reservations', 'equipment_reservations'));
    }
}
