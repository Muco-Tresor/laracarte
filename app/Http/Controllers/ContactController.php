<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageCreated;
use App\Models\Message;

class Contactcontroller extends Controller
{
    public function create()
    {
    	return view('contact.create');
    }

    public function store(ContactFormRequest $request)
    {

        $message = Message::create([

            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);


    	Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($message));

    	flashy('Nous vous reprondrons dans les plus brefs delais');

    	return redirect(route('home_path'));
    	
    }
}
