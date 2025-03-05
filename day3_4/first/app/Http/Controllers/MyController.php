<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function show()
    {
        // return "Hello from Gaurav Jha!";
        return view('contact');
    }

    public function square($num)
    {
        return "square: " . $num*$num ;
    }
}
