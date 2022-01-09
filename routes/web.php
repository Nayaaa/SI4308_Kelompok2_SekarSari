<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\pelangganController;
use App\Models\Karyawan;
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

Route::get('/loginadmin', function () {
    return view('admin.login');
});

Route::get('/daftar', function () {
    return view('pelanggan.daftar');
});

Route::get('/admin/tambahobat', function () {
    return view('admin.tambahobat');
});

Route::get('/admin/tambahdokter', function () {
    return view('admin.tambahdokter');
});

Route::get('/admin/tambahkaryawan', function () {
    return view('admin.tambahkaryawan');
});


Route::get('/admin', [ObatController::class, 'admin'])->name('daftarobat');

Route::get('/admin/dokter', [DokterController::class, 'index'])->name('dokter');

Route::get('/admin/karyawan', [KaryawanController::class, 'index'])->name('karyawan');

Route::get('/home', [ObatController::class, 'index'])->name('obat');

Route::get('/pelanggan/layanan', [DokterController::class, 'layanan'])->name('layanan');

Route::get('/pelanggan/keranjang/{idpelanggan}', [pelangganController::class, 'keranjang'])->name('keranjangpelanggan');

Route::get('/katalog', [ObatController::class, 'katalog'])->name('katalog');

Route::post('/login/admin', [KaryawanController::class, 'auth'])->name('loginadmin');

Route::post('/login/pelanggan', [pelangganController::class, 'auth'])->name('loginpelanggan');

Route::get('/katalogobatmata', [ObatController::class, 'katalogmata'])->name('katalogmata');

Route::get('/katalogobatkulitluar', [ObatController::class, 'katalogobatkulitluar'])->name('katalogobatkulitluar');

Route::get('/katalogobatperedanyeri', [ObatController::class, 'katalogobatperedanyeri'])->name('katalogobatperedanyeri');

Route::get('/katalogobatantiseptik', [ObatController::class, 'katalogobatantiseptik'])->name('katalogobatantiseptik');

Route::get('/katalogobatantiinflamasi', [ObatController::class, 'katalogobatantiinflamasi'])->name('katalogobatantiinflamasi');

Route::get('/katalogobatalergi', [ObatController::class, 'katalogobatalergi'])->name('katalogobatalergi');

Route::get('/katalogobatmulutdantenggorokan', [ObatController::class, 'katalogobatmulutdantenggorokan'])->name('katalogobatmulutdantenggorokan');

Route::get('/katalogobatpencernaan', [ObatController::class, 'katalogobatpencernaan'])->name('katalogobatpencernaan');

Route::get('/katalogobatvitamindansuplemen', [ObatController::class, 'katalogobatvitamindansuplemen'])->name('katalogobatvitamindansuplemen');

Route::get('/detailobat/{id}/{idpelanggan}', [ObatController::class, 'detail'])->name('detail');

Route::post('/tambahkeranjang/{idobat}/{idpelanggan}', [pelangganController::class, 'tambahkeranjang'])->name('tambahkeranjang');

Route::post('/admin/simpanobat', [ObatController::class, 'tambahobat'])->name('simpanobat');

Route::post('/admin/simpankaryawan', [KaryawanController::class, 'tambahkaryawan'])->name('simpankaryawan');

Route::post('/admin/deleteobat', [ObatController::class, 'deleteobat'])->name('deleteobat');

Route::get('/admin/editobat/{id}', [ObatController::class, 'editobat'])->name('editobat');

Route::post('/admin/deletedokter', [DokterController::class, 'deletedokter'])->name('deletedokter');

Route::get('/admin/editdokter/{id}', [DokterController::class, 'editdokter'])->name('editdokter');

Route::post('/admin/editdokter/{id}', [DokterController::class, 'updatedokter'])->name('updatedokter');

Route::post('/admin/editobat/{id}', [ObatController::class, 'updateobat'])->name('updateobat');

Route::post('/admin/simpandokter', [DokterController::class, 'tambahdokter'])->name('simpandokter');

Route::post('/daftarpelanggan', [pelangganController::class, 'daftar'])->name('daftarpelanggan');

Route::post('/admin/deletekaryawan', [KaryawanController::class, 'deletekaryawan'])->name('deletekaryawan');

Route::get('/admin/editkaryawan/{id}', [KaryawanController::class, 'editkaryawan'])->name('editkaryawan');

Route::post('/admin/editkaryawan/{id}', [KaryawanController::class, 'updatekaryawan'])->name('updatekaryawan');


