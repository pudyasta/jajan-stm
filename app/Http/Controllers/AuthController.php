<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //


    public function getRegister()
    {
        return view('/daftar');
    }


    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|unique:users|min:5',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
        ]);


        return "ok";
    }



    public function postLogin(Request $request)
    {
        // $email = $request->email;
        // $password = $request->password;

        // $data = User::where('email', $email)->first();
        // if ($data) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Session::put('name', user->name);
            // Session::put('email', Auth::user->email);
            Session::put('key', TRUE);
            return redirect('/');
        } else {
            return redirect('/')->with('status', 'Password atau Email, Salah !');
        }
        // } else {
        //     return redirect('/')->with('status', 'Password atau Email, Salah!');
        // }
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
