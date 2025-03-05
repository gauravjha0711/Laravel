<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/student',function(){
    return view('student');
});
Route::get('/student1',function(){
    $name = "Gaurav Jha";
    // $class = "K22KM";
    $roll = 12210400;
    return view('student', compact('name','roll'));
});
Route::get('/student2',function(){
    $name = "Gagan";
    // $class = "K22KM";
    $roll = 12210452;
    return view('student', compact('name','roll'));
});
Route::get('/student3',function(){
    $name = "Ritik";
    // $class = "K22KM";
    $roll = 12254522;
    return view('student', compact('name','roll'));
});
Route::get('/contact',function(){
    return view('contact');
});

Route::view('/list', 'list');

Route::get('/mycontroller', [MyController::class, 'show']);

Route::get('/mycontroller/{num}', [MyController::class, 'square']);
