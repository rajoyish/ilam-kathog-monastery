<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\IndexCommitteeController;
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
    Route::get('/about-chief-lama', 'aboutChiefLama')->name('about-chief-lama');
});

Route::get('/committees', IndexCommitteeController::class)->name('committee');

Route::resource('/albums', AlbumController::class);
