<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $data = ['name' => 'vergil2510'];
        Mail::send(['text' => 'contact_mail'], $data, function($message){
            $message->to('vergil2510@gmail.com', 'Quang Huy');
            $message->subject('Send mail');
            $message->from('huydq2510@gmail.com', 'Hyu');
        });
        echo "Email was send";
    }
}
