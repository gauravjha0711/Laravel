<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', UserController::class);



Route::get('/form', function () {
    return view('form');
});

Route::post('/submit', [UserController::class, 'handleForm']);