<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\pelangganController;
use App\Models\Obat;
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
    return view('pelanggan.login');
});

Route::get('/daftar', function () {
    return view('pelanggan.daftar');
});

Route::get('/admin/tambahobat', function () {
    return view('admin.tambahobat');
});


Route::get('/admin', [ObatController::class, 'admin'])->name('daftarobat');

Route::get('/admin/dokter', [DokterController::class, 'index'])->name('dokter');

Route::get('/home', [ObatController::class, 'index'])->name('obat');

Route::get('/katalog', [ObatController::class, 'katalog'])->name('katalog');

Route::get('/detailobat/{id}', [ObatController::class, 'detail'])->name('detail');

Route::post('/admin/simpanobat', [ObatController::class, 'tambahobat'])->name('simpanobat');

Route::post('/admin/deleteobat', [ObatController::class, 'deleteobat'])->name('deleteobat');

Route::get('/admin/editobat/{id}', [ObatController::class, 'editobat'])->name('editobat');

Route::post('/admin/editobat/{id}', [ObatController::class, 'updateobat'])->name('updateobat');

Route::post('/admin/tambahdokter', [DokterController::class, 'tambahdokter'])->name('tambahdokter');

Route::post('/daftarpelanggan', [pelangganController::class, 'daftar'])->name('daftarpelanggan');


