<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        return view('pages.services');
    }

    public function admin() {
        return view('pages.admin', [
            'messages' => Contact::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }
}
