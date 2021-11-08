<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->middleware('has_login');

Auth::routes(['register' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/laporan-perbulan', [App\Http\Controllers\LaporanPerbulan::class, 'index'])->name('laporan-perbulan');
Route::get('/data-laporan-perbulan/{query}', [App\Http\Controllers\LaporanPerbulan::class, 'data_laporan_perbulan'])->name('data-laporan-perbulan');
Route::get('/pdf-laporan-perbulan/{query}', [App\Http\Controllers\LaporanPerbulan::class, 'pdf_laporan_perbulan'])->name('pdf-laporan-perbulan');

Route::middleware('auth')->name('admin.')->group(function () {
    Route::post('/dashboard/cari', [App\Http\Controllers\DashboardController::class, 'search'])->name('dashboard.search');
    Route::get('/dashboard/print/{query}', [App\Http\Controllers\DashboardController::class, 'print'])->name('dashboard.print');
    
    Route::middleware('admin')->group(function () {
        Route::resource('/siswa', App\Http\Controllers\UserController::class);
        Route::resource('/kelas', App\Http\Controllers\StudentClassController::class);
        Route::resource('/spp', App\Http\Controllers\EducationalGuidanceDonationController::class);
        Route::resource('/petugas', App\Http\Controllers\UserOfficerController::class);
        Route::resource('/transaksi', App\Http\Controllers\EducationalGuidanceDonationTransactionResourceController::class);
        
    });

    Route::post('/transaksi/cari', [App\Http\Controllers\EducationalGuidanceDonationTransactionController::class, 'search'])->name('transaksi.search');
    Route::get('/transaksi/print/{user_id}', [App\Http\Controllers\EducationalGuidanceDonationTransactionController::class, 'print'])->name('transaksi.print');

    Route::get('/kelas/json/{id}', [App\Http\Controllers\Ajax\StudentClassController::class, 'getStudentClass'])->name('kelas.json.edit');
    Route::get('/spp/json/{id}', [App\Http\Controllers\Ajax\EducationalGuidanceController::class, 'getEducationalGuidanceDonation'])->name('spp.json.edit');
    Route::get('/petugas/json/{id}', [App\Http\Controllers\Ajax\UserOfficerController::class, 'getUserOfficer'])->name('petugas.json.edit');
    Route::get('/transaksi/json/{id}', [App\Http\Controllers\Ajax\EducationalGuidanceDonationTransactionController::class, 'getEducationalGuidanceDonationTransaction'])->name('transaksi.json.edit');
});
