<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $students = [
        ['name' => 'Gaurav Kumar', 'registration_no' => '12210400', 'email' => 'gaurav@example.com', 'number' => '9876543210'],
        ['name' => 'Adarsh Singh', 'registration_no' => '12207186', 'email' => 'adarsh@example.com', 'number' => '8765432109'],
        ['name' => 'GaganDeep Singh', 'registration_no' => '12210223', 'email' => 'gagandeep', 'number' => '8765482109'],

    ];
    $table = "<table border='1' cellpadding='10' cellspacing='0'>";
    $table .= "<tr>
                <th>Name</th>
                <th>Registration No</th>
                <th>Email</th>
                <th>Number</th>
               </tr>";
    foreach ($students as $student) {
        $table .= "<tr>
                    <td>{$student['name']}</td>
                    <td>{$student['registration_no']}</td>
                    <td>{$student['email']}</td>
                    <td>{$student['number']}</td>
                   </tr>";
    }
    $table .= "</table>";
    return $table;
    
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/new/{name}', function ($name) {
    echo $name;
    return view('new');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact/{name}', function ($name) {
    echo $name;
    return view('contact',['name'=>$name]);
});
