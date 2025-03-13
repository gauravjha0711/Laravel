<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookieController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/setcookie', [CookieController::class, 'setCookie']);   // Route to set a cookie
Route::get('/getcookie', [CookieController::class, 'getCookie']);   // Route to get a cookie
Route::get('/deletecookie', [CookieController::class, 'deleteCookie']);  // Route to delete a cookie

Route::get('/getuser', [CookieController::class, 'getuser']);  // Route to get a user

Route::get('/view',[ProductController::class,"returnView"]);