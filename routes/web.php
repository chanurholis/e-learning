<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiklatJenisController;

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

Route::resource('diklatJenis', DiklatJenisController::class);


Route::resource('diklatBidangPelatihans', App\Http\Controllers\DiklatBidangPelatihanController::class);

Route::resource('diklatJenisKegiatans', App\Http\Controllers\DiklatJenisKegiatanController::class);

Route::resource('diklatModelPelatihans', App\Http\Controllers\DiklatModelPelatihanController::class);