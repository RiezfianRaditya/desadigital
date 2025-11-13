<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/berita', 'index')->name('berita-list');
    Route::get('/berita/{slug}', 'detail')->name('berita-detail');
});
