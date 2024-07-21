<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JourFormRequest;
use App\Models\Jour;
use Illuminate\Http\Request;

class JourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jours.index', [
            'jours' => Jour::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jours.form', [
            'jour' => new Jour()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JourFormRequest $request)
    {
        $jour = Jour::create($request->validated());

        return to_route('admin.jour.index')->with('success', 'Le jour a bien été créé.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jour $jour)
    {
        return view('admin.jours.form', [
            'jour' => $jour
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JourFormRequest $request, Jour $jour)
    {
        $jour->update($request->validated());

        return to_route('admin.jour.index')->with('success', 'Le jour a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jour $jour)
    {
        $jour->delete();

        return to_route('admin.jour.index')->with('success', 'Le jour a bien été supprimé.');
    }
}
