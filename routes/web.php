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
Route::get('/category/{id}', [HomeController::class, 'show']);
Route::post('/hubungi', [HomeController::class, 'sendWhatsapp']);

Route::get('/nama-produk', [DetailProduk::class, 'index']);
Route::get('/{name}', [DetailProduk::class, 'detail']);
Route::get('/send-message/{id}', [DetailProduk::class, 'sendWhatsapp']);

// Route::post('/send-email', [EmailController::class, 'sendEmail']);