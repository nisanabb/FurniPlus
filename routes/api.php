<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPengemasanController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\HasilPengirimanController;
use App\Http\Controllers\DataShippingController;
use App\Http\Controllers\DataPengembalianController;

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

// PROBIS PICKUP
Route::get('pickup/fetch', [DataPengemasanController::class, 'fetchDataFromAPI']); //untuk ambil data dari api inventory 
Route::get('pickup', [DataPengemasanController::class, 'index']); //Yang ini masuk juga ke probis pengiriman data untuk get barang
Route::get('pickup/{id}', [DataPengemasanController::class, 'showbyid']); //untuk ambil data berdasarkan id

// PROBIS PEMBERIAN RESI
Route::put('pickup/{id_pengemasan}', [DataPengemasanController::class, 'update']); //ini untuk update

// PROBIS UPDATE PELACAKAN DAN PEMANTAUAN
Route::put('/pengiriman/{id_pengemasan}', [DataPengemasanController::class, 'updateStatus']);

// PROBIS PENGEMBALIAN BARANG
Route::get('return', [DataPengembalianController::class, 'return']); //fetch
Route::get('return/show', [DataPengembalianController::class, 'showall']); //show
Route::get('return/{id}', [DataPengembalianController::class, 'showbyid']);



// Route::get('return/{id}', [DataShippingController::class, 'returnbyid']);







