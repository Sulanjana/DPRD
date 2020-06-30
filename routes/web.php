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

Route::get('/', function () {
    return view('login');
});

Route::get('instansi','InstansiController@tamp');
Route::get('umum','UmumController@tamp');
Route::get('kunjungan','KunjunganController@tamp');
Route::get('index','IndexController@tamp');
Route::get('login','LoginController@tamp');