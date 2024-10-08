<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Newsletter;
use App\Models\Policy;
use App\Models\Post;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home', [
            'faqs' => Faq::all(),
            'heroes' => Hero::all()
        ]);
    }

    public function about() {
        return view('pages.about', [
            'abouts' => About::all(),
            'faqs' => Faq::all()
        ]);
    }

    public function services() {
        return view('pages.services', [
            'faqs' => Faq::all()
        ]);
    }

    public function policy() {
        return view('pages.policy', [
            'policies' => Policy::all(),
            'faqs' => Faq::all()
        ]);
    }

    public function admin() {
        return view('pages.admin', [
            'messages' => Contact::orderBy('created_at', 'desc')->paginate(3),
            'newsletters' => Newsletter::orderBy('created_at', 'desc')->paginate(3),
            'contacts' => Contact::all(),
            'emails' => Newsletter::all(),
            'users' => User::all(),
            'students' => Student::all(),
            'teachers' => Teacher::all(),
            'posts' => Post::all(),
        ]);
    }
}
