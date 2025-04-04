<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //
    public function login(Request $request){
        // $name = $request->input('myname');
        // return "Successfully logged in. Name: " . $name;

        $request->session()->put('myname', $request->input('myname'));
        return redirect('/profile');
        echo session('myname');
    }
    public function logout(){
        session()->pull('myname');
        return redirect('/profile');

        $request->session()->put('allData',$request->input[]);
        return redirect('profile');
        $request->session()->forget();
    }
    public function flashSession(){
        session::flash('status',"temporary message");
        return response()->json(['message' => 'Hash Data store']);       
    }
}