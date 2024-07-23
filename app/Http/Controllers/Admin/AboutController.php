<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutFormRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.abouts.index', [
            'abouts' => About::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = new About();

        return view('admin.abouts.form', [
            'about' => new About()
        ]);
    }

    public function store(AboutFormRequest $request)
    {
        $about = About::create($request->validated());

        return to_route('admin.about.index')->with('success', 'L\'a propos a bien été créée.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.abouts.form', [
            'about' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutFormRequest $request, About $about)
    {
        $about->update($request->validated());

        return to_route('admin.about.index')->with('success', 'L\' a propos a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        return to_route('admin.about.index')->with('success', 'L\'a propos a bien été supprimée.');
    }
}
