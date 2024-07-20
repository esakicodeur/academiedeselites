<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('students.index', [
            'students' => Student::orderBy('created_at', 'desc')->paginate(2)
        ]);
    }

    public function show(string $slug, Student $student) {
        $expectedSlug = $student->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('students.show', ['slug' => $expectedSlug, 'contact' => $student]);
        }

        return view('students.show', [
            'student' => $student
        ]);
    }

    public function create() {
        return view('students.create');
    }

    public function store(StudentFormRequest $request) {
        $student = Student::create($request->validated());

        flashy()->success('Nous vous répondrons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
