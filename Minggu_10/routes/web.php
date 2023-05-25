<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CobaController;
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
    return view('welcome');
});

// membuat route create session
Route::get('/session', [SessionController::class, 'create']);

// membuat route show session
Route::get('/session/show', [SessionController::class, 'show']);

// membuat route delete session
Route::get('/session/delete', [SessionController::class, 'delete']);

// membuat route untuk memanggil method index
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

// membuat route untuk memanggil method formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// membuat route untuk memanggil method error
Route::get('/error/{nama?}', [CobaController::class, 'index']);
