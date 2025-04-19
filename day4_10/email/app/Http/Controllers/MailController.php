<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    //
    function sendEmail(){
        $to = "gauravjhagk07@gmail.com";
        $msg = "Hi,How are you!";
        $sub = "Test Mail";
        Mail::to($to)->send(new WelcomeEmail($msg,$sub));
        return "Email sent successfully";
    }
}
