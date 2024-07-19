<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherFormRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function create() {
        return view('teachers.create');
    }

    public function store(TeacherFormRequest $request) {
        $teacher = Teacher::create($request->validated());

        flashy()->success('Nous vous répondrons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
