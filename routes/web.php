<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

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