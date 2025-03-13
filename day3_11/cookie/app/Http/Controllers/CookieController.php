<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function setCookie(Request $request)
    {
        $cookie = cookie('user', 'Gaurav Jha', 60); 
        
        return response('Cookie has been set!')
                    ->cookie($cookie); 
    }

    public function getCookie(Request $request)
    {
        $cookieValue = $request->cookie('user');
        
        return response('Cookie value is: ' . $cookieValue);
    }

    public function deleteCookie()
    {
        return response('Cookie has been deleted!')
                    ->cookie('user', '', -1);
    }

    function getuser(Request $request) {
        $name = $request->cookie('user');
        if($name == null) {
            return redirect('/setcookie');
        } else {
        return view('user', ['name' => $name]);
        }
    }
     
}