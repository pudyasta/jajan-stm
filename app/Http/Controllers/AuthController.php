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
        return view('daftar');
    }


    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => "",
            'password' =>  bcrypt($request->password),
        ]);


        return redirect('/reg')->with('status2', "cok");
    }



    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();
        if ($data) {
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('key', TRUE);
                return redirect('/');
            } else {
                return redirect('/')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('/')->with('status', 'Password atau Email, Salah!');
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
