<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NiveauFormRequest;
use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.niveaux.index', [
            'niveaux' => Niveau::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.niveaux.form', [
            'niveau' => new Niveau()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NiveauFormRequest $request)
    {
        $niveau = Niveau::create($request->validated());

        return to_route('admin.niveau.index')->with('success', 'Le niveau a bien été créé.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveau $niveau)
    {
        return view('admin.niveaux.form', [
            'niveau' => $niveau
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NiveauFormRequest $request, Niveau $niveau)
    {
        $niveau->update($request->validated());

        return to_route('admin.niveau.index')->with('success', 'Le niveau a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $niveau)
    {
        $niveau->delete();

        return to_route('admin.niveau.index')->with('success', 'Le niveau a bien été supprimé.');
    }
}
