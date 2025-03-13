<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function handleForm(Request $request)
    {
        $name = $request->input('name');
        return "Form submitted! Name: " . $name;
    }

}
