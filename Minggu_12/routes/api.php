<?php

use App\Http\Controllers\ApiPendidikanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Untuk memanggil semua data pada tabel
Route::get('/api_pendidikan', [ApiPendidikanController::class, 'index']);

//Untuk memanggil data yang berada pada id tertentu
Route::get('/api_pendidikan/{id}', [ApiPendidikanController::class, 'show']);

//Untuk menambahkan data ke dalam database
Route::post('/api_pendidikan', [ApiPendidikanController::class, 'store']);

//Untuk mengubah data tertentu berdasarkan id
Route::put('/api_pendidikan/{id}', [ApiPendidikanController::class, 'update']);

//Untuk menghapus data berdasarkan id
Route::delete('/api_pendidikan/{id}', [ApiPendidikanController::class, 'destroy']);
