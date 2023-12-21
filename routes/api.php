<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/mobil', [App\Http\Controllers\ApiMobilController::class, 'index']);
Route::post('/mobil', [App\Http\Controllers\ApiMobilController::class, 'store']);
Route::delete('/mobil/{id}', [App\Http\Controllers\ApiMobilController::class, 'destroy']);
Route::put('/mobil/{id}', [App\Http\Controllers\ApiMobilController::class, 'update']);
Route::get('/mobil/search', [App\Http\Controllers\ApiMobilController::class, 'search']);
