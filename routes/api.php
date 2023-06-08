<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPengemasanController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\HasilPengirimanController;


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

/*
|--------------------------------------------------------------------------
========================== E-Commerce =========================
|--------------------------------------------------------------------------
*/




/*
|--------------------------------------------------------------------------
========================== Inventory =========================
|--------------------------------------------------------------------------
*/




/*
|--------------------------------------------------------------------------
========================== Shipping =========================
|--------------------------------------------------------------------------
*/

Route::get('hasil_pengiriman', [HasilPengirimanController::class, 'index']);

Route::get('pickup/', [DataPengemasanController::class, 'index']);
Route::get('pickup/{id}', [DataPengemasanController::class, 'show']);




