<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Controller::class, 'pageLogin'])->name('pageLogin');
Route::post('/login', [Controller::class, 'authLogin'])->name('authLogin');

Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
Route::post('/pelanggan/add', [PelangganController::class, 'store'])->name('createPelanggan');

Route::get('/produk', [ProdukController::class, 'index'])->name('Produk');
Route::post('/produk/add', [ProdukController::class, 'store'])->name('createProduk');

Route::get('/buy/produk/{produkId}', [PenjualanController::class, 'buyying'])->name('buy');
Route::post('/buying/produk', [PenjualanController::class, 'store'])->name('buyying');