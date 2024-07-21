<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
use App\Models\Information;
use App\Models\Jour;
use App\Models\Matiere;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('students.index', [
            'students' => Student::orderBy('created_at', 'desc')->paginate(25)
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
        return view('students.create', [
            'informations' => Information::all(),
            'jours' => Jour::all(),
            'matieres' => Matiere::all(),
        ]);
    }

    public function store(StudentFormRequest $request, Student $student) {
        $student = Student::create($request->validated());

        $student->informations()->attach($request->validated('information'));
        $student->jours()->attach($request->validated('jours'));
        $student->matieres()->attach($request->validated('matieres'));

        flashy()->success('Nous vous répondrons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
