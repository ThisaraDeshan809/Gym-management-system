<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function payment_page()
    {
        $customer_users = User::where('type', 'customer')->get();
        $payments = Payment::with('user')->get();
        return view('dashboards.admin.payment', compact('customer_users','payments'));
    }

    public function savePayment(Request $request)
    {

        $payment = Payment::create([
            'user_id' => $request->input('user_id'),
            'payment_date' => $request->input('date'),
            'payment_month' => $request->input('month'),
            'payment_method' => $request->input('method'),
            'payment_status' => $request->input('status'),
            'payment_amount' => $request->input('amount'),
        ]);

        return redirect()->back()->with('success', 'Attendance saved successfully.');
    }
}
