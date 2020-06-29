<?php

namespace App\Http\Controllers;

use App\User;
use App\Mahasiswa; // import mahasiswa
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

    public function postregister(Request $request)
    {
        // input pendaftar sebagai user        
        $user = new User;
        $user->role = 'mahasiswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('admin');
        $user->remember_token = str_random(60);
        $user->save();

        // insert ke table mahasiswa
        $request->request->add(['user_id' => $user->id]);
        $mahasiswa = Mahasiswa::create($request->all());

        return redirect('/')->with('sukses', 'Pendaftaran berhasil');
    }
}
