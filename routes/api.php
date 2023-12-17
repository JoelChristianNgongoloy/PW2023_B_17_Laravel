<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ReviewController;

// Rute untuk Pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::post('/pemesanan', [PemesananController::class, 'store']);
Route::get('/pemesanan/{id}', [PemesananController::class, 'show']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);

// Rute untuk Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::post('/pembayaran', [PembayaranController::class, 'store']);
Route::get('/pembayaran/{id}', [PembayaranController::class, 'show']);
Route::put('/pembayaran/{id}', [PembayaranController::class, 'update']);
Route::patch('/pembayaran/{id}', [PembayaranController::class, 'update']);
Route::delete('/pembayaran/{id}', [PembayaranController::class, 'destroy']);

// Rute untuk Review
Route::get('/reviews', [ReviewController::class, 'index']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/reviews/{id}', [ReviewController::class, 'show']);
Route::put('/reviews/{id}', [ReviewController::class, 'update']);
Route::patch('/reviews/{id}', [ReviewController::class, 'update']);
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);