<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function create() {
        return view('students.create');
    }

    public function store(StudentFormRequest $request) {
        $student = Student::create($request->validated());

        flashy()->success('Nous vous répondrons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
