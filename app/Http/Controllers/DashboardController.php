<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa; // import model

class DashboardController extends Controller
{
    //
    public function index()
    {
    	// tampilkan
    	return view('dashboards/index');
    }
}
