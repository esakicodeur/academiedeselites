<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherFormRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        return view('teachers.index', [
            'teachers' => Teacher::orderBy('created_at', 'desc')->paginate(2)
        ]);
    }

    public function show(string $slug, Teacher $teacher) {
        $expectedSlug = $teacher->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('teachers.show', ['slug' => $expectedSlug, 'teacher' => $teacher]);
        }

        return view('teachers.show', [
            'teacher' => $teacher
        ]);
    }

    public function create() {
        return view('teachers.create');
    }

    public function store(TeacherFormRequest $request) {
        $teacher = Teacher::create($request->validated());

        flashy()->success('Nous vous répondrons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
