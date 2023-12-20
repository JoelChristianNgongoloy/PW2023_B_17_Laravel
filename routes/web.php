<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');


Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::middleware(['auth', 'userType:regular'])->group(function () {
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('trackMobil', [ProfileController::class, 'trackMobil']);
    Route::get('profile/edit/{id}', [ProfileController::class, 'edit']);
    Route::put('profile/edit/{id}', [ProfileController::class, 'update']);
    Route::get('home', [HomePageController::class, 'index']);

    Route::get('liatMobil/{id}', [HomePageController::class, 'liatMobil']);
    Route::post('liatMobil/comment/{id}', [HomePageController::class, 'createComment']);
    Route::put('liatMobil/comment/{id}', [HomePageController::class, 'updateComment']);
    Route::delete('liatMobil/comment/{id}', [HomePageController::class, 'hapusComment']);
    Route::get('pemesanan/{id}', [HomePageController::class, 'getData'])->name('pemesanan');
    Route::post('metodePembayaran/{id}', [HomePageController::class, 'metodePembayaran']);
    Route::post('Pembayaran/{id}', [HomePageController::class, 'Pembayaran']);
    Route::post('Diterima/{id}', [HomePageController::class, 'Diterima']);
    Route::delete('delete/{id}', [HomePageController::class, 'destroy']);


    Route::get('track', [HomePageController::class, 'trackMobil']);
});

Route::middleware(['auth', 'userType:admin'])->group(function () {
    Route::get('admin', [AdminViewController::class, 'index'])->name('admin');
    Route::get('admin/tampilUser', [AdminViewController::class, 'tampilUser']);
    Route::delete('admin/tampilUser/{id}', [AdminViewController::class, 'destroy']);
    Route::get('admin/tampilUser/{id}', [AdminViewController::class, 'edit']);
    Route::put('admin/tampilUser/{id}', [AdminViewController::class, 'update']);

    Route::get('admin/tampilMobil', [MobilController::class, 'index']);
    Route::post('admin/tampilMobil/action', [MobilController::class, 'store']);
    Route::delete('admin/tampilMobil/{id}', [MobilController::class, 'destroy']);
    Route::get('admin/tampilMobil/{id}', [MobilController::class, 'edit']);
    Route::put('admin/tampilMobil/{id}', [MobilController::class, 'update']);
});

Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');
