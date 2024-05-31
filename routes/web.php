<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Models\artikel;
use App\Models\jurusan;
use App\Models\fasilitas;
use App\Models\industri;
use App\Models\eskul;

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
    $artikel = artikel::all();
    return view('welcome',compact('artikel'));
});
Route::get('/tampil_fasilitas', function () {
    $fasilitas = fasilitas::all();
    return view('fasilitas',compact('fasilitas'));
});

Route::get('/tampil_jurusan', function () {
    $jurusan = jurusan::all();
    return view('jurusan',compact('jurusan'));
});
Route::get('/tampil_eskul', function () {
    $eskul = eskul::all();
    return view('eskul',compact('eskul'));
});
Route::get('/tampil_industri', function () {
    $industri = industri::all();
    return view('industri',compact('industri'));
});


Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('jurusan', App\Http\Controllers\JurusanController::class)->middleware('auth');
Route::resource('industri', App\Http\Controllers\IndustriController::class)->middleware('auth');
Route::resource('fasilitas', App\Http\Controllers\fasilitasController::class)->middleware('auth');
Route::resource('eskul', App\Http\Controllers\EskulController::class)->middleware('auth');
Route::resource('artikel', App\Http\Controllers\ArtikelController::class)->middleware('auth');

