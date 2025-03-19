<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/{age}', function ($age) {
    return view('adult')->with('age', $age);
})->middleware(CheckAge::class);

// Route::middleware(CheckAge::class)
//     ->get('/{age}', function ($age) {
//         return view('adult')->with('age', $age);
//     });

