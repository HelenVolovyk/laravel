<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

	public function index()
	{
		return view('contact');
	}



	public function send(CreateMessageRequest $request, Contact $contact)
	{
		//dd($request->input('name'));

			$contact =new Contact();
			$contact->name 	= $request->input('name');
			$contact->email 	= $request->input('email');
			$contact->subject = $request->input('subject');
			$contact->message	= $request->input('message');

		$contact->save();

		return redirect()->route('index') ->with(['status' => 'Your message was successfully sended!']);;



	}
}
