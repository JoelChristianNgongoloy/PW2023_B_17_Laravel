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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/dashAdmin', function () {
//     return view('dashAdmin');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/profile', function () {
//     return view('contentCustomer/profile');
// });

// Route::get('/pemesanan', function () {
//     return view('contentCustomer/pemesanan');
// });

// Route::get('/homePage', function () {
//     return view('contentCustomer/homePage');
// });

// Route::get('/admin', function () {
//     return view('viewAdmin/admin', [
//         'user' => [
//             [
//                 'no' => 1,
//                 'nama' => 'Kevin',
//                 'email' => 'Kevin@gmail,com',
//                 'alamat' => 'Jln Magelang',
//                 'tanggalLahir' => '5 Mei 2002',
//                 'Telepon' => '0898766122344'
//             ],
//             [
//                 'no' => 2,
//                 'nama' => 'Joel',
//                 'email' => 'Joel@gmail,com',
//                 'alamat' => 'Jln Benar',
//                 'tanggalLahir' => '6 July 2002',
//                 'Telepon' => '0898766122232'
//             ],
//             [
//                 'no' => 3,
//                 'nama' => 'Demus',
//                 'email' => 'Demus@gmail,com',
//                 'alamat' => 'Jln Kaliurang',
//                 'tanggalLahir' => '6 Desember 2002',
//                 'Telepon' => '08987612345678'
//             ],
//             [
//                 'no' => 4,
//                 'nama' => 'Joko',
//                 'email' => 'Joko@gmail,com',
//                 'alamat' => 'Jln Kerumah Ibu',
//                 'tanggalLahir' => '10 Juni 2002',
//                 'Telepon' => '08987661221212'
//             ]
//         ]
//     ]);
// });
// Route::get('/adminMobil', function () {
//     return view('viewAdmin/adminMobil', [
//         'mobil' => [
//             [
//                 'no' => 1,
//                 'nama' => 'Honda Civic',
//                 'tipe' => 'Turbo',
//                 'tahun' => '2021',
//                 'warna' => 'Black',
//                 'stock' => '10',
//                 'deskripsi' => 'Mobil terbaik produk honda',
//                 'harga' => 'Rp 1.000.000.000,00'
//             ],
//             [
//                 'no' => 2,
//                 'nama' => 'Toyota Fortuner',
//                 'tipe' => 'VRZ',
//                 'tahun' => '2020',
//                 'warna' => 'Black',
//                 'stock' => '10',
//                 'deskripsi' => 'Mobil Pejabat',
//                 'harga' => 'Rp 500.000.000,00'
//             ],
//             [
//                 'no' => 3,
//                 'nama' => 'Daihatsu Terios',
//                 'tipe' => 'R Custom',
//                 'tahun' => '2023',
//                 'warna' => 'White',
//                 'stock' => '20',
//                 'deskripsi' => 'Mobil Keluarga',
//                 'harga' => 'Rp 300.000.000,00'
//             ],
//             [
//                 'no' => 4,
//                 'nama' => 'Ford Ranger',
//                 'tipe' => 'Raptor 2.0L',
//                 'tahun' => '2022',
//                 'warna' => 'Red',
//                 'stock' => '22',
//                 'deskripsi' => 'Mobil Mancing',
//                 'harga' => 'Rp 980.000.000,00'
//             ]
//         ]
//     ]);
// });

// Route::get('/liatMobil', function () {
//     return view('contentCustomer/liatMobil');
// });

// Route::get('/trackMobil', function () {
//     return view('contentCustomer/trackMobil');
// });
