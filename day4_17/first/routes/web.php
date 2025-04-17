<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RulerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',[RulerController::class,'user']);



Route::get('/form', [RulerController::class, 'showForm'])->name('form.show');

Route::post('/submit', [RulerController::class, 'user'])->name('form.submit');
