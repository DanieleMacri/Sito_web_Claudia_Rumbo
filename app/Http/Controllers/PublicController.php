<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function contact(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $body = compact('name', 'email', 'message');

        Mail::to($body['email'])->send(new ContactMail($body));

        return redirect()->back()->with('message', 'Grazie per avermi contattato, riceverà una risposta al più presto.');
    }
    

}
