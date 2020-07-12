<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{

    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
       $mailable = new ContactMessageCreated($request->name, $request->email, $request->subject, $request->message);
       Mail::to(config('configmail.admin_support_email'))->send($mailable);

       return redirect()->route('contact')->with('success', 'Merci. Votre message a été envoyé.');

       
    }
}
