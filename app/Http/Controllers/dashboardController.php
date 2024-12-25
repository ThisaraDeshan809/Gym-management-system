<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function getAdminDashboard(){

        $user = Auth::user();

        $users = User::all();

        return view('dashboards.admin.dashboard', compact('user', 'users'));
    }
}
