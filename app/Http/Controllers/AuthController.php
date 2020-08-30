<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;

class AuthController extends Controller
{
    //


    public function getRegister()
    {
        return view('registration.daftar');
    }


    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|unique:users|min:5',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
            'remember_token' => Str::random(40)
        ]);
        Mail::to($request->email)->send(new VerifyMail($user));
        Session::put('key', TRUE);
    }



    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Session::put('key', TRUE);
            return redirect('/home');
        } else {
            return redirect('/')->with('status', 'Password atau Email, Salah !');
        }
    }

    public function confirm($email, $remember_token)
    {
        $user = User::where(['email' => $email, 'remember_token' => $remember_token])->first();
        if ($user) {
            User::where(['email' => $email, 'remember_token' => $remember_token])->update(['verified' => 1, 'remember_token' => NULL]);
            return view('registration.confirmed');
            Auth::loginUsingId($user->id);
        } else {
            return redirect("/user/create");
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('name');
        $request->session()->forget('email');
        $request->session()->forget('key');
        Auth::logout();
        return redirect('/');
    }
}
