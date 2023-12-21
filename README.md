Kelas B Kelompok 17

Anggota Kelompok:

-   Nicodemus Anggit Krisnuaji (210711127)-backend, frontend & integrasi
-   Joel Christian Ngongoloy (210711413)-backend, frontend & integrasi
-   Vincentius Kevin Nicklaus Rudolf Huizen (210711083)-backend, frontend & integrasi

Username & Password Login

-   Login User:
    -   Username:robert
    -   Password:12345678
-   Login Admin:
    -   Username:admin
    -   Password:adminMobil

Bonus yang diambil:

-   ## Routes API:
    Route::get('/mobil', [App\Http\Controllers\ApiMobilController::class, 'index']); - Get Data Mobil
    Route::post('/mobil', [App\Http\Controllers\ApiMobilController::class, 'store']); - Create Data Mobil
    Route::delete('/mobil/{id}', [App\Http\Controllers\ApiMobilController::class, 'destroy']); - Delete Data Mobil
    Route::put('/mobil/{id}', [App\Http\Controllers\ApiMobilController::class, 'update']); - Update Data Mobil
    Route::get('/mobil/search', [App\Http\Controllers\ApiMobilController::class, 'search']); -Search Data Mobil
