<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info',[UserController::class,'show']);

Route::get('/hello/{name}',function($name){
    return view('hello',['name'=>$name]);
});


Route::get('/form',function(){
    return view('form');
});
Route::post('/submit',[FormController::class,'handle']);