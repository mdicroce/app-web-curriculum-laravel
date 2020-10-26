<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived as MessageReceived;

class MessagesController extends Controller
{
    //
    public function store(Request $request)
    {
        $message = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        Mail::to('mtt1pt@gmail.com')->queue(new MessageReceived($message));
        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 25 horas.');
    }
}
