<?php

namespace App\Http\Controllers;

use App\Models\ReserveTrainer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{

    public function getAdminDashboard()
    {
        $user = Auth::user();
        $users = User::all();

        return view('dashboards.admin.dashboard', compact('user', 'users'));
    }

    public function getUserDashboard()
    {
        $user = Auth::user();
        $users = User::all();
        $trainers = User::role('Trainer')->get();
        $reservedSessions = ReserveTrainer::with(['user', 'trainer'])
            ->where('status', 'reserved')
            ->where('date', '>=', Carbon::today()->toDateString())
            ->orderBy('date')
            ->orderBy('time_in')
            ->get()
            ->groupBy(function ($session) {
                return Carbon::parse($session->date)->format('l');
            });

        return view('dashboards.user.dashboard', compact('user', 'users', 'trainers','reservedSessions'));

    }
}
