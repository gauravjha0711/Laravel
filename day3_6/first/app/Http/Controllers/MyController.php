<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function simple(){
        return response("Hello from Gaurav Jha!");    
    }
    public function show()
    {
        // return "Hello from Gaurav Jha!";
        return view('contact');
    }

    public function square($num)
    {
        return "square: " . $num*$num ;
    }
    public function table($num)
    {
        return view('table', compact('num'));
    }

    public function studentList(){
        $students = [
            ['name' => 'Gaurav Jha', 'roll' => 12210400, 'class' => 'K22KM'],
            ['name' => 'Gagan', 'roll' => 12210452, 'class' => 'K22KM'],
            ['name' => 'Ritik', 'roll' => 12254522, 'class' => 'K22KM'],
        ];
        return view('student', compact('students'));
    }
}