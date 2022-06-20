<?php

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('layout.main');
});

Route::get('/welcome','Authcontroller@login')->middleware('guest')->name('login');
Route::get('/home1', 'MahasiswaController@home')->middleware('auth');
Route::get('/mahasiswa1', 'MahasiswaController@mahasiswa')->middleware('auth');
Route::get('/user1', 'AuthController@user')->middleware('auth');
Route::get('/user/adduser1', 'AuthController@adduser')->middleware('auth');
Route::post('/user/saveuser', 'AuthController@saveuser')->middleware('auth');
Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');
Route::get('/user/edituser1/{id}', 'AuthController@edituser')->middleware('auth');
Route::get('/user/cari', 'AuthController@pencarian')->middleware('auth');
Route::get('/logout', 'AuthController@logout')->middleware('auth');
Route::put('/user/updateuser/{id}', 'AuthController@updateuser')->middleware('auth');
Route::get('/user/deleteuser/{id}', 'AuthController@deleteuser')->middleware('auth');
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian')->middleware('auth');
Route::get('/mahasiswa/addmahasiswa1', 'MahasiswaController@addmahasiswa')->middleware('auth');
Route::post('/mahasiswa/savemahasiswa', 'MahasiswaController@savemahasiswa')->middleware('auth');
Route::get('/mahasiswa/editmahasiswa1/{id}', 'MahasiswaController@editmahasiswa')->middleware('auth');
Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa')->middleware('auth');
Route::get('/mahasiswa/deletemahasiswa/{id}', 'MahasiswaController@deletemahasiswa')->middleware('auth');

