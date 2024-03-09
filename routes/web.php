<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailProduk;
use App\Http\Controllers\EmailController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/nama-produk', [DetailProduk::class, 'index']);
Route::get('/{name}', [DetailProduk::class, 'detail']);

Route::post('/send-email', [EmailController::class, 'sendEmail']);