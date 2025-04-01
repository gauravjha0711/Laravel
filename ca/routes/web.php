<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',[MyController::class,'list']);

Route::get('/students/1',[MyController::class,'student1']);
Route::get('/students/2',[MyController::class,'student2']);
Route::get('/students/3',[MyController::class,'student3']);
Route::get('/students/4',[MyController::class,'student4']);
Route::get('/students/5',[MyController::class,'student5']);