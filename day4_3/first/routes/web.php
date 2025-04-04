<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'login');
Route::post('/login', [UserProfileController::class, 'login'])->name('login');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/logout', [UserProfileController::class, 'logout'])->name('logout');