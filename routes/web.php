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
	Route::get('/mahasiswa/{id}/delete', 'MahasiswaController@delete');

});

Route::group(['middleware' => ['auth','checkRole:admin,mahasiswa']],function(){
	// route dashboard
	Route::get('/dashboard', 'DashboardController@index');
	// route avatar
	Route::get('/mahasiswa/{id}/profile', 'MahasiswaController@profile');	
	// route edit data
	Route::get('/mahasiswa/{id}/edit', 'MahasiswaController@edit');
	// route update data
	Route::post('/mahasiswa/{id}/update', 'MahasiswaController@update');
});
