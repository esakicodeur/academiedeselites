<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterFormRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function create() {
        return view('newsletters.create');
    }

    public function store(NewsletterFormRequest $request) {
        $newsletter = Newsletter::create($request->validated());

        flashy()->success('Merci pour votre abonnement à notre newsletter !');

        return redirect()->route('home');
    }
}
