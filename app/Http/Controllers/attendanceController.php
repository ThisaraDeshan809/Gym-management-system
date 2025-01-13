<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;

class attendanceController extends Controller
{
    public function attendance_page()
    {
        $customer_users = User::where('type', 'customer')->get();
        $attendances = Attendance::with('user')->get();
        return view('dashboards.admin.attendance', compact('customer_users','attendances'));
    }

    public function saveAttendance(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'date' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
        ]);

        Attendance::create([
            'user_id' => $request->input('user_id'),
            'date' => $request->input('date'),
            'time_in' => $request->input('time_in'),
            'time_out' => $request->input('time_out'),
        ]);

        return redirect()->back()->with('success', 'Attendance saved successfully.');
    }
}
