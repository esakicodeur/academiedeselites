<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index', [
            'messages' => Contact::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    public function create() {
        return view('contacts.create');
    }

    public function show(string $slug, Contact $contact) {
        $expectedSlug = $contact->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('contacts.show', ['slug' => $expectedSlug, 'contact' => $contact]);
        }

        return view('contacts.show', [
            'contact' => $contact
        ]);
    }

    public function store(ContactFormRequest $request) {
        $contact = Contact::create($request->validated());

        flashy()->success('Nous vous répondrons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
