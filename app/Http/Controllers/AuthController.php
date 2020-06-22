<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // fungsi login
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if (
            Auth::attempt($request->only('email', 'password'))
        ) {
            return redirect('/students');
        }
        return redirect('/login');
    }

    // fungsi logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
