<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\PengalamanKerjaController;

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
    return view('welcome');
});

// untuk menuju ke halaman dashboard
Route::resource('dashboard',DashboardController::class);
// untuk menuju ke halaman pengelaman kerja
Route::resource('pengalaman_kerja',PengalamanKerjaController::class);
// untuk menghapus data
Route::delete('/pengalaman_kerja/{id}', [PengalamanKerjaController::class, 'destroy'])->name('pengalaman_kerja.destroy');
