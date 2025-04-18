<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\Uppercase;

class RulerController extends Controller
{  

    public function showForm()
    {
        return view('form');
    }

    // public function user(Request $request)
    // {
    //     $validate = $request->validate([
    //         'username' => [
    //             'required',
    //             function (string $attribute, mixed $value, Closure $fail): void {
    //                 if (strtoupper($value) !== $value) {
    //                     $fail('The :attribute must be uppercase.');
    //                 }
    //             },
    //         ],
    //         'email' => 'required|email',
    //         'password' => 'required|min:6|max:10',
    //     ]);

    //     return $validate->all();
    //     //dd($validate);
    //     //echo $validate['username'];
    // }


    public function user(Request $request)
{
    $validate = $request->validate([
        'username' => [
            'required',
            function ($attribute, $value, $fail) {
                if (strtoupper($value) !== $value) {
                    $fail('The :attribute must be uppercase.');
                }
            },
        ],
        'email' => 'required|email',
        'password' => 'required|min:6|max:10',
    ]);

    return $validate->all(); // or return response()->json($validate);
}
}
