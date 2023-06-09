<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/daftar_mahasiswa',
//'App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
//Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
//Route::match(['get', 'post'], '/detail_mahasiswa',
//[MahasiswaController::class, 'detail_mhs']);
Route::view('/detail_mahasiswa', 'detail_mahasiswa');
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/postingan', [AdminController::class, 'show_postingan']);
Route::get('/admin/arsip', [AdminController::class, 'show_arsip']);
Route::get('/admin/akun', [AdminController::class, 'show_akun']);
Route::get('/admin/tentang', [AdminController::class, 'show_tentang']);
Route::get('/admin/terkini', [AdminController::class, 'show_terkini']);
Route::get('/admin/keluar', [AdminController::class, 'show_keluar']);
Route::get('/admin/populer', [AdminController::class, 'show_populer']);
