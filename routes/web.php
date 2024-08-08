<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect('/movies');
    });
    Route::get('movies/archived', [MovieController::class, 'moviesArchived'])->name('movies.archived');
    Route::resource('movies', MovieController::class);
    Route::get('genders/archived', [GenderController::class, 'genresArchived'])->name('genders.archived');
    Route::resource('genders', GenderController::class);
    Route::get('browse', [BrowseController::class, 'browse'])->name('browse.index');
    Route::get('/browse/search', [BrowseController::class, 'search'])->name('browse.search');
    Route::post('/browse/{movie}/rate', [BrowseController::class, 'rate'])->name('browse.rate');

    Route::post('movies/{id}/restore', [MovieController::class, 'restore'])->name('movies.restore');
    Route::post('genders/{id}/restore', [GenderController::class, 'restore'])->name('genders.restore');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::middleware(['guest'])->group(function () {
    Route::view('/login', 'login')->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::view('/register', 'register')->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/email/verify', function () {
    return view('verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/movies');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');







