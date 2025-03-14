<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/start', function () {
    return view('b1');
});

Route::get('/home',function(){
    return view('home');
});

