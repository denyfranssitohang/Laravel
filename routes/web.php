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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Four';
//     return view('about', ['nama' => $nama]);
// });

// Method tabel mahasiswa
Route::get('/', 'PagesController@home')->name('home');

// route login
Route::get('/login', 'AuthController@login')->name('login');

Route::post('/postlogin', 'AuthController@postlogin');

// route logout
Route::get('/logout', 'AuthController@logout');


Route::get('/about', 'PagesController@about');

// route yang harus login
// Method tabel Students (cara-2)
Route::resource('/students', 'StudentsController')->middleware('auth');

//
Route::get('/mahasiswa', 'MahasiswaController@index');
// Method tabel Students (cara-1)
// // menampilkan data mahasiswa
// Route::get('/students', 'StudentsController@index');

// // menampilkan form tambah data
// Route::get('/students/create', 'StudentsController@create');

// // menampilkan detail mahasiswa
// Route::get('/students/{student}', 'StudentsController@show');

// // menangani insert data ke database
// Route::post('/students', 'StudentsController@store');

// // menangani delete data mahasiswa
// Route::delete('/students/{student}', 'StudentsController@destroy');

// // menampilkan form edit
// Route::get('students/{student}', 'StudentsController@edit');

// // menangkap dan mengangani data edit
// Route::patch('/students/{student}', 'StudentsController@update');
