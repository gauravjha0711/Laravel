<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function adduser(Validation $request){
        return $request->all();
    }
}