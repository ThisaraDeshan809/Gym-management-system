<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SendPasswordEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class genaralController extends Controller
{
    public function userLogin(){

        return view('auth.login');
    }

    public function loginUser(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->hasRole('Admin')) {
                return redirect()->route('adminDashboard');
            }
            elseif($user->hasRole('User')){
                return redirect()->route('userDashboard');
            }
            else
            {
                Auth::logout();
                return redirect()->route('home')->withErrors([
                    'email' => 'Access denied for non-users.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }


    public function userRegister(){

        return view('auth.userRegister');
    }


    public function registerUser(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors([
                'email' => 'The email address has already been taken.'
            ])->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => 'customer',
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('User');

        Auth::login($user);

        return redirect()->route('userDashboard');

    }




    public function index(){


        return view('dashboards.publicsite.homePage');
    }




    public function home(){

        if (auth()->check()) {
                $user = auth()->user();

                if ($user->hasRole('User')) {
                    return redirect()->route('userDashboard');
                } else{
                    return redirect()->route('adminDashboard');
                }
        }else{
            return redirect()->route('login');
        }
    }

    public function setDashboard()
    {

        if (auth()->check()) {
            $user = auth()->user();

            if ($user->hasRole('Vendor')) {
                return redirect()->route('userDashboard');
            } else{
                return redirect()->route('adminDashboard');
            }
        }

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
