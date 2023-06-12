<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPengemasanController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\HasilPengirimanController;
use App\Http\Controllers\DataShippingController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('hasil_pengiriman', [HasilPengirimanController::class, 'index']);

// PROBIS PICKUP
Route::get('/pengemasan', [DataPengemasanController::class, 'index']); //probis pickup cm ganti nama pengemasan biar enak
Route::get('/pengemasan/{id_pengemasan}', [DataPengemasanController::class, 'showbyid']); //pengemasan/id_pesanan
// Route::put('/pengemasan/{id_pengemasan}', [DataPengemasanController::class, 'showbyid']);  //update nomor resi disini

Route::get('/fetch-data', [DataPengemasanController::class, 'fetchDataFromAPI']);
Route::get('/pengiriman', [DataPengemasanController::class, 'getpengirimandaridatabase']); //kepake jika storemdari api ke lokalnya udah bisa


// PROBIS RESI PENGIRIMAN
Route::get('pickup/{id}', [DataPengemasanController::class, 'showbyid']);
Route::put('pickup/{id}', [DataPengemasanController::class, 'update']);

// PROBIS PENGEMBALIAN BARANG
Route::get('return/', [DataShippingController::class, 'return']);
Route::get('return/{id}', [DataShippingController::class, 'returnbyid']);






