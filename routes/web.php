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
Route::get('/news/detail', function () {
    return view('news_detail');
});
Route::get('/armada/detail', function () {
    if (request()->has('ct2k')) {
        return view('detail_ct2k');
    } else if(request()->has('savanah')) {
        return view('detail_savanah');
    } else if(request()->has('zenitstol')) {
        return view('detail_zenitstol');
    }
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
    Route::get('/staff/add', function () {
        return view('admin.add_staff');
    });
    Route::get('/staff/edit', function () {
        return view('admin.edit_staff');
    });
    Route::get('/ticketing', function () {
        return view('admin.ticketing');
    });
    Route::get('/inventory', function () {
        return view('admin.inventory');
    });
    Route::get('/inventory/add', function () {
        return view('admin.add_inventory');
    });
    Route::get('/inventory/edit', function () {
        return view('admin.edit_inventory');
    });
    Route::get('/maintenance', function () {
        return view('admin.maintenance');
    });
});
Route::get('/login', function () {
    return view('admin.login');
});
