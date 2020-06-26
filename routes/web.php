<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route home laravel
Route::get('/', function () {
    return view('home');
});

// route about
Route::get('/about', function () {
    return view('about');
});

// route login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');

// route logout
Route::get('/logout', 'AuthController@logout');

// route login admin
Route::group(['middleware' => ['auth','checkRole:admin']],function(){

	// route mahasiswa
	Route::get('/mahasiswa', 'MahasiswaController@index');

	// route tambah data
	Route::post('/mahasiswa/create', 'MahasiswaController@create');

	// route delete
	// Route::get('/mahasiswa/{id}/delete', 'MahasiswaController@delete');
	Route::get('/mahasiswa/{mahasiswa}/delete', 'MahasiswaController@delete');	// cara route model binding profile

	// route tambah nilai
	Route::post('/mahasiswa/{id}/addnilai', 'MahasiswaController@addnilai');

	// route hapus nilai
	Route::get('/mahasiswa/{id}/{idmatkul}/deletenilai','MahasiswaController@deletenilai');

	// route dosen
	Route::get('/dosen/{id}/profile', 'DosenController@profile');
});

Route::group(['middleware' => ['auth','checkRole:admin,mahasiswa']],function(){
	// route dashboard
	Route::get('/dashboard', 'DashboardController@index');

	// route profile
	// Route::get('/mahasiswa/{id}/profile', 'MahasiswaController@profile');	
	Route::get('/mahasiswa/{mahasiswa}/profile', 'MahasiswaController@profile'); // cara route model binding profile

	// route edit data
	// Route::get('/mahasiswa/{id}/edit', 'MahasiswaController@edit');
	Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit'); // cara route model binding edit

	// route update data
	// Route::post('/mahasiswa/{id}/update', 'MahasiswaController@update');
	Route::post('/mahasiswa/{mahasiswa}/update', 'MahasiswaController@update'); // cara route model binding update
	
	// route export excel
	Route::get('/mahasiswa/exportExcel', 'MahasiswaController@exportExcel');
	
	// route export pdf
	Route::get('/mahasiswa/exportPDF', 'MahasiswaController@exportPDF');
});
