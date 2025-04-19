<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $info = [
            'name' => 'Gaurav',
            'age' => 20,
            'city' => 'Patna',
        ];
        return response()->json($info);
    }
}
