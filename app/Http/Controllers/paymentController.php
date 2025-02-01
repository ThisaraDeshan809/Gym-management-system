<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PricePackage;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paymentController extends Controller
{
    public function payment_page()
    {
        $customer_users = User::where('type', 'customer')->get();
        $payments = Payment::with('user')->get();
        return view('dashboards.admin.payment', compact('customer_users', 'payments'));
    }

    public function get_all_payments_datatable(Request $request)
    {
        $payments = Payment::all();

        if ($request->has('start_date') && $request->has('end_date')) {
            $payments = $payments->whereBetween('payment_date', [$request->start_date, $request->end_date]);
        }

        return datatables()->of($payments)
            ->addColumn('user_name', function ($row) {
                $user = User::find($row->user_id);
                return $user->name;
            })
            ->addColumn('package_name', function ($row) {
                $package = PricePackage::find($row->package_id);
                return $package->package_name;
            })
            ->addColumn('action', function ($row) {
                if ($row->payment_status == 'paid') {
                    return '';
                } else {
                    $btn = '<button type="button" class="bg-gradient-to-tl from-[#e38d24] to-[#f7b615] text-black font-semibold py-2 px-3 rounded-full inline-block cursor-pointer btn_mark_as_paid_payment m-1" data-id="' . $row->id . '">Mark As Paid</button>';
                }
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
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

    public function savePackagePayment(Request $request)
    {
        try {
            $user = User::findOrFail($request->input('user_id'));
            $package = PricePackage::findOrFail($request->input('package_id'));

            DB::beginTransaction();
            $payment = Payment::create([
                'user_id' => $request->input('user_id'),
                'package_id' => $request->input('package_id'),
                'payment_date' => $request->input('payment_date'),
                'payment_month' => $request->input('payment_month'),
                'payment_method' => $request->input('payment_method'),
                'payment_status' => 'pending',
                'payment_type' => $request->input('payment_type'),
                'payment_amount' => $request->input('package_price'),
                'package_expire_date' => now()->addMonths($package->duration),
            ]);
            DB::commit();

            return response()->json(['success' => true, 'message' => 'Payment saved successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Something went wrong' . $e->getMessage()], 500);
        }
    }

    public function mark_as_paid_payment(Request $request)
    {
        try{
            DB::beginTransaction();

            $payment = Payment::findOrFail($request->payment_id);
            $payment->payment_status = 'paid';
            $payment->save();

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Payment marked as paid successfully.'], 200);
        } catch(Exception $e){
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Something went wrong'], 500);
        }
    }
}
