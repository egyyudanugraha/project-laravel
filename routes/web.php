<?php

use App\Http\Controllers\AbsenControl;
use App\Http\Controllers\JadwalControl;
use App\Http\Controllers\KontrakControl;
use App\Http\Controllers\MahasiswaControl;
use App\Http\Controllers\MatakuliahControl;
use App\Http\Controllers\SemesterControl;
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
    return view('index');
});
Route::resource('/mahasiswa', MahasiswaControl::class);
Route::resource('/matakuliah', MatakuliahControl::class);
Route::resource('/absen', AbsenControl::class);
Route::resource('/kontrak', KontrakControl::class);
Route::resource('/semester', SemesterControl::class);
Route::resource('/jadwal', JadwalControl::class);