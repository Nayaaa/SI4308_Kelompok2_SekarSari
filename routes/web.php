<?php

use App\Http\Controllers\ObatController;
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

Route::get('/kat', function () {
    return view('katalog');
});

Route::get('/', [ObatController::class, 'index'])->name('obat');

Route::get('/katalog', [ObatController::class, 'katalog'])->name('katalog');

Route::get('/detailobat/{id}', [ObatController::class, 'detail'])->name('detail');