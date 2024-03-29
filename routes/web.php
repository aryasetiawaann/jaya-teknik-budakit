<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailProduk;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/download', function () {
    $path = storage_path('app/public/profile.pdf');

    if (file_exists($path)) {
        return response()->download($path);
    } else {
        return response('');
    }
});

Route::get('/portfolio/{id}', [PortfolioController::class, 'index']);

Route::get('/nama-produk', [DetailProduk::class, 'index']);
Route::get('/{name}', [DetailProduk::class, 'detail']);
Route::get('/send-message/{id}', [DetailProduk::class, 'sendWhatsapp']);



