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
    return view('home');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/pilih_paket', function () {
    if (request()->has('isi_detail')) {
        return view('detail');
    } else if(request()->has('bayar')) {
        return view('bayar');
    } else if(request()->has('bni') || request()->has('bca') || request()->has('gopay') || request()->has('qris')) {
        return view('detail_bayar');
    }
    return view('paket');
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/staff', function () {
        return view('admin.staff');
    });
    Route::get('/ticketing', function () {
        return view('admin.ticketing');
    });
});
