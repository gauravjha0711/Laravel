<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function list(){
        return view('list');
    }
    function student1(){
        $id = 1;
        return view('student1', ['id' => $id]);
    }
    function student2(){
        $id = 2;
        return view('student2', ['id' => $id]);
    }
    function student3(){
        $id = 3;
        return view('student3', ['id' => $id]);
    }
    function student4(){
        $id = 4;
        return view('student4', ['id' => $id]);
    }
    function student5(){
        $id = 5;
        return view('student5', ['id' => $id]);
    }
}