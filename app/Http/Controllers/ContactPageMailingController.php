<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SendContactPageMailFormRequest;

class ContactPageMailingController extends Controller
{
    public function create(SendContactPageMailFormRequest $request)
    {

    	Mail::send('emails.feedback', 
			['sender_msg' => $request->message, 'sender_email' => $request->email, 'sender_subject' => $request->subject], 
			function($m) {
			$m->subject('Contact Page Feedback');
		});

		return redirect()->back()->with('message', 'Thanks for saying hello!');
    }
}
