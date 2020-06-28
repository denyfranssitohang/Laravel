<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // function home
    public function home()
    {
    	return view('sites/home');
    }

    // fucntion register
    public function register()
    {
    	return view('sites/register');
    }
}
