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
        return "success";
    }
}
