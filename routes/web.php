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

Route::get('/de', function () {
    return view('detailobat');
});

Route::get('/', [ObatController::class, 'index'])->name('obat');

Route::get('/detailobat/{id}', [ObatController::class, 'detail'])->name('detail');