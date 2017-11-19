<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Guest;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $guest = new Guest;
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->message = $request->message;
        $guest->save();
        $data = ['guestName' => $request->name];
        Mail::send('contact_mail', $data, function($message) use ($request){
            $message->to($request->email, $request->name);
            $message->subject('Website Contact Form: ' . $request->name);
            $message->from('huydq2510@gmail.com', 'Quang Huy');
        });
    }
}
