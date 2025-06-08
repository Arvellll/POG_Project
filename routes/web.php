<?php

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
    return view('backoffice.pages.login.login');
})->name('login');


Route::prefix('dashboard')->group(function () {
    Route::view('/', 'backoffice.pages.dashboard.dashboard')->name('dashboard');
});

Route::prefix('liga')->name('liga.')->group(function () {
    Route::view('/liga', 'backoffice.pages.liga.liga')->name('index');
    Route::view('/tambah-liga', 'backoffice.pages.liga.tambah-liga')->name('tambah');
    Route::view('/partisipan', 'backoffice.pages.liga.modal.partisipan')->name('partisipan');
    Route::view('/detail', 'backoffice.pages.liga.detail-liga')->name('detail');
    Route::view('/detail2', 'backoffice.pages.liga.detail2-liga')->name('detail2');
});

Route::prefix('team')->name('team.')->group(function () {
    Route::view('/team', 'backoffice.pages.team.team')->name('index');
    Route::view('/tambah-team', 'backoffice.pages.team.tambah-team')->name('tambah');
    Route::view('/tambah-pemain', 'backoffice.pages.team.modal.tambah-pemain')->name('tambah-pemain');
    Route::view('/detail-team', 'backoffice.pages.team.detail-team')->name('detail-team');
    
});

Route::prefix('score')->name('score.')->group(function () {
    Route::view('/score', 'backoffice.pages.scoreboard.scoreboard')->name('index');
    Route::view('/detail-score', 'backoffice.pages.scoreboard.detail-score')->name('detail');
    
});

Route::prefix('splash')->name('splash.')->group(function () {
    Route::view('/splash', 'backoffice.pages.splash.splash')->name('index');
    Route::view('/detail-splash', 'backoffice.pages.splash.detail-splash')->name('detail');
    
});

 