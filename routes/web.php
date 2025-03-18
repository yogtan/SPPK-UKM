<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/detail_ukm', function () {
    return view('alternatif/alternatif');
});
Route::get('/informasi', function () {
    return view('informasi/informasi');
});
Route::get('/daftar_bidang', function () {
    return view('rekomendasi/daftar_bidang');
});
Route::get('/daftar_ukm', function () {
    return view('rekomendasi/daftar_ukm');
});
Route::get('/daftar_kriteria', function () {
    return view('rekomendasi/daftar_kriteria');
});
Route::get('/proses_penilaian', function () {
    return view('rekomendasi/proses_penilaian');
});
Route::get('/hasil_rekomendasi', function () {
    return view('rekomendasi/hasil_rekomendasi');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
