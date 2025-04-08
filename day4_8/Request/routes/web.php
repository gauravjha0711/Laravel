<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('user','loginform');
Route::post('/user',FirstController::class,'adduser');