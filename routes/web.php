<?php

use App\Http\Controllers\DiklatBidangPelatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiklatJenisController;
use App\Http\Controllers\DiklatBidangKerjaController;

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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('diklats', DiklatController::class);

Route::resource('users', UserController::class)->middleware('auth');

// Diklat Jenis
Route::resource('diklatJenis', DiklatJenisController::class)->middleware('auth');
Route::get('format-import-jenis-diklat', [DiklatJenisController::class, 'format_import'])->middleware('auth');
Route::get('show-form-import-diklat-jenis', [DiklatJenisController::class, 'showFormImport'])->middleware('auth');
Route::post('import', [DiklatJenisController::class, 'import'])->middleware('auth')->name('diklatJenis.import');

// Bidang Pelatihan
Route::resource('diklatBidangPelatihans', App\Http\Controllers\DiklatBidangPelatihanController::class)->middleware('auth');
Route::get('format-import-bidang-pelatihan', [DiklatBidangPelatihanController::class, 'format_import'])->middleware('auth');
Route::get('show-form-import', [DiklatBidangPelatihanController::class, 'showFormImport'])->middleware('auth');
Route::post('import', [DiklatBidangPelatihanController::class, 'import'])->middleware('auth')->name('diklatBidangPelatihans.import');

// Bidang Kerja
Route::resource('diklatBidangKerjas', DiklatBidangKerjaController::class)->middleware('auth');
Route::get('format-import-bidang-kerja', [DiklatBidangKerjaController::class, 'format_import'])->middleware('auth');
Route::get('show-form-import-bidang-kerja', [DiklatBidangKerjaController::class, 'showFormImport'])->middleware('auth');
Route::post('import', [DiklatBidangKerjaController::class, 'import'])->middleware('auth')->name('diklatBidangKerjas.import');

Route::resource('diklatJenisKegiatans', App\Http\Controllers\DiklatJenisKegiatanController::class)->middleware('auth');

Route::resource('diklatModelPelatihans', App\Http\Controllers\DiklatModelPelatihanController::class)->middleware('auth');
