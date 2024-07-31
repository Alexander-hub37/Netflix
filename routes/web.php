<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BrowseController;

Route::get('/', function () {
    return redirect('/movies');
});

Route::resource('genders', GenderController::class);
Route::resource('movies', MovieController::class);
Route::get('browse', [BrowseController::class, 'browse'])->name('browse.index');
Route::get('/browse/search', [BrowseController::class, 'search'])->name('browse.search');
Route::post('/browse/{movie}/rate', [BrowseController::class, 'rate'])->name('browse.rate');








