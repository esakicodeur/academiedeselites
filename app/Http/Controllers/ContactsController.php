<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create() {
        return view('contacts.create');
    }

    public function store(ContactFormRequest $request) {
        $contact = Contact::create($request->validated());

        flashy()->success('Nous vous répondrons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
