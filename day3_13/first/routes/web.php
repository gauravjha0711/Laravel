<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\Checkage;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/valid', function () {
    return "This is the route after middleware.";
})->middleware(ValidUser::class);


Route::get('/check', function () {
    return "This is the route after middleware.";
})->middleware(Checkage::class);

/* group function middleWare*/



/* group function middleWare*/
Route::middleware(['ok-user'])->group(function () {
    Route::get('/mid',[UserController::class,'show']);
    Route::get('/abc',[UserController::class,'simple']);
});