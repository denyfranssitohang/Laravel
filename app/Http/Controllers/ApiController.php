<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // function edit nilai
    public function editnilai(Request $request, $id)
    {	
    	// ambil data siswa dari id yang dikirim dari url
    	$mahasiswa = \App\Mahasiswa::find($id);
    	// update pivot table
    	$mahasiswa->matkul()->updateExistingPivot($request->pk,['nilai' => $request->value]);



    }
}
