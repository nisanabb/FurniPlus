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
Route::get('pickup/', [DataPengemasanController::class, 'index']);

// PROBIS RESI PENGIRIMAN
Route::get('pickup/{id}', [DataPengemasanController::class, 'showbyid']);
Route::put('pickup/{id}', [DataPengemasanController::class, 'update']);

// PROBIS PENGEMBALIAN BARANG
Route::get('return/', [DataShippingController::class, 'return']);
Route::get('return/{id}', [DataShippingController::class, 'returnbyid']);






