<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return redirect('/movies');
});

Route::resource('genders', GenderController::class);
Route::resource('movies', MovieController::class);
Route::get('browse', [MovieController::class, 'browse'])->name('browse.index');
Route::get('/browse/search', [MovieController::class, 'search'])->name('browse.search');
Route::post('movies/{movie}/rate', [MovieController::class, 'rate'])->name('movies.rate');









