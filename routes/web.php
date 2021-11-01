<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes by Faiz Hanafi - 1910130008
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

Route::resource('jadwal', JadwalController::class);



Route::resource('dosen', DosenController::class);



Route::resource('mahasiswa', MahasiswaController::class);

