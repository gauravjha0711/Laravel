<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/mycontroller', [MyController::class, 'show']);

Route::get('/mycontroller/{num}', [MyController::class, 'square']);

Route::get('/simple', [MyController::class, 'simple']);

Route::get('/table/{num}', [MyController::class, 'table']);

Route::get('/student', [MyController::class, 'studentList']);

Route::get('/global/{id}', function($id){
    return "ID: " . $id;
});

//fallback method
Route::fallback(function(){
    return "<h1>Page not found!</h1>";
});

//redirection
Route::redirect('/abc', 'welcome');

Route::get('/home',function(){
    return view('admin.first');
});

//json response
Route::get('/json', function(){
    return response()->json([
        'name' => 'Gaurav Jha',
        'roll' => 12210400,
        'class' => 'K22KM'
    ]);
});

Route::get('/students', function(){
    $students = [
        ['name' => 'Gaurav Jha', 'roll' => 12210400, 'class' => 'K22KM'],
        ['name' => 'Gagan', 'roll' => 12210452, 'class' => 'K22KM'],
        ['name' => 'Ritik', 'roll' => 12254522, 'class' => 'K22KM'],
    ];
    return response()->json($students);
});