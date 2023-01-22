<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Guest\HomeController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/', 'latestThreeAlbums');
    Route::get('/about-monastery', 'aboutMonastery')->name('about-monastery');
});

Route::resource('/albums', AlbumController::class);
