<?php

use Illuminate\Support\Facades\Route;

Route::get('/{$name?}', function ($name="Gaurav") {
    return view('welcome',['name'=>'Gaurav']);
});

Route::get('/home/{n?}', function ($n=0) {
    echo "The value variable is: ".$n."<br>";
    echo "The square of the value is: ".($n*$n);
    return view('home');
});

Route::get('/hello/{name?}/{age?}', function ($name="Gaurav", $age="20") {
    echo "Hello ".$name."! You are ".$age." years old.";
    return view('hello');
});

// Route::get('/sum/{a}/{b}', function ($a=0, $b=0){
//     echo "Sum: ".($a+$b);
//     return view('sum');
// });

//laravel constrant
Route::get('/sum/{n1}/{n2}', function($n1, $n2){ 
    echo "The sum is: " . ($n1 + $n2) . "<br>";
    echo "The difference is: " . ($n1 - $n2) . "<br>";
    return view('sum');
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);


Route::get('/user/{name?}', function ($name="Gaurav") {
    echo "Hello ".$name."!";
    return view('user');
})->where('name', '[A-Za-z]+');

Route::get('student/{name}/{reg}/{email}/{number}', function ($name, $reg, $email, $number) {
    echo "Name: ".$name."<br>";
    echo "Registration No: ".$reg."<br>";
    echo "Email: ".$email."<br>";
    echo "Number: ".$number;
    return view('student');
})->where(['name' => '[A-Za-z]+', 'reg' => '[0-9]+', 'email' => '[a-z]+@[a-z]+.[a-z]+', 'number' => '[0-9]+']);

//name your Route
Route::get('/profile', function () {
    echo "This is the profile page";
    return view('profile');
})->name('profile');


//using array
// Route::get('/contact/{name}', function ($name) {
//     return view('contact',['name'=>$name]);
// });



Route::get('/contact', function () {
    return view('contact',["name"=>"gaurav"]);
});

Route::view('/{name}', 'welcome');

//using compact
// Route::get('/about/{name}', function ($name) {
//     return view('about', compact('name'));
// });


//using with
Route::get('/about/{name}', function ($name) {
    return view('about')->with('name', $name);
});


Route::get('/about/{name}', function ($name) {
    return view('about')->withname('name', $name);
});



//table
Route::get('table/{n}', function ($n) {
    return view('table')->with('number', $n);
});
