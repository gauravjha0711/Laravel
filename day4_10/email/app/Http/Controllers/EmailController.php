<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as MAIL;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    //
    public function SendMail(){
        $toemail="gauravjhagk07@gmail.com";
        $message="Hello, this is a test email.";
        $subject="Test Email";
        MAIL::to($toemail)->send(new WelcomeEmail($message, $subject));

        return "Email sent successfully!";
    }
}