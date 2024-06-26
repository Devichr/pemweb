<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaKamuController;
use App\Http\Controllers\NewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/kelas', function () {
    return view('kelas');
});
Route::get('/gambar', [MahasiswaController::class, 'gambar']);
Route::get('/kontak', [NamaKamuController::class, 'infoKontak']);
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);

