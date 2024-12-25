<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Mail\SendPasswordEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class genaralController extends Controller
{
    
    
    public function index(){

        $latestProfile = Profile::latest('id')->first();


        return view('dashboards.publicsite.portfolio', compact('latestProfile'));
    }

    
    
    
    public function home(){

        if (auth()->check()) {
                $user = auth()->user();

                if ($user->hasRole('Vendor')) {
                    return redirect()->route('vendorDashboard');
                } else{
                    return redirect()->route('adminDashboard');
                }
        }else{
            return redirect()->route('login');
        }
    }

    public function setDashboard()
    {
        // Check user role and redirect accordingly
        if (auth()->check()) {
            $user = auth()->user();

            if ($user->hasRole('Vendor')) {
                return redirect()->route('vendorDashboard');
            } else{
                return redirect()->route('adminDashboard');
            }
        }

        // Default redirection if no role is matched
        return redirect('/dashboard');
    }

    public function setNewPass(){

        $user = Auth::user();

        if ($user->pass_reset == 1) {
            return view('auth.newPass');
        }else{
            return redirect()->route('home');
        }
        
    }

    public function setNewPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'send_password_email' => 'nullable|boolean',
        ]);

        $AuthUser = Auth::user();

        $userEmailSet = $request->input('send_password_email');

        $user = User::findOrFail($AuthUser->id);

        $tempPass = $request->input('password');
        
        $hashedPassword = Hash::make($request->input('password'));

        $user->update([
            'password' => $hashedPassword,
            'pass_reset' => 0,
        ]);

        if (isset($userEmailSet) && $userEmailSet) {
            Mail::to($user->email)->send(new SendPasswordEmail($user, $tempPass));
        }

        $notification = [
            'message' => 'password changed succesfully. please re login with new password',
            'alert-type' => 'success'
        ];

        return redirect()->route('setDashboard')->with($notification);
        // return redirect()->route('showPass', ['id' => $user->id, 'tempPass' => $tempPass])->with($notification);
    }
}
