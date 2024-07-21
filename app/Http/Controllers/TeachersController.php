<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherFormRequest;
use App\Models\Jour;
use App\Models\Matiere;
use App\Models\Niveau;
use App\Models\Teacher;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        return view('teachers.index', [
            'teachers' => Teacher::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    public function show(string $slug, Teacher $teacher) {
        $expectedSlug = $teacher->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('teacher.show', ['slug' => $expectedSlug, 'teacher' => $teacher]);
        }

        return view('teachers.show', [
            'teacher' => $teacher
        ]);
    }

    public function pdf(string $slug, Teacher $teacher) {
        $expectedSlug = $teacher->getSlug();

        if ($slug !== $expectedSlug) {
            return to_route('teacher.pdf', ['slug' => $expectedSlug, 'teacher' => $teacher]);
        }

        return Pdf::loadView('teachers.pdf', [
            'teacher' => $teacher
        ])->download('teacher.pdf');
    }

    public function create() {
        return view('teachers.create', [
            'jours' => Jour::all(),
            'matieres' => Matiere::all(),
            'niveaux' => Niveau::all(),
        ]);
    }

    public function store(TeacherFormRequest $request) {
        $teacher = Teacher::create($request->validated());

        $teacher->jours()->attach($request->validated('jours'));
        $teacher->matieres()->attach($request->validated('matieres'));
        $teacher->niveaux()->attach($request->validated('niveaux'));

        flashy()->success('Nous vous répondrons dans les plus brefs délais !');

        return redirect()->route('home');
    }
}
