<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PolicyFormRequest;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.policies.index', [
            'policies' => Policy::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $policy = new Policy();

        return view('admin.policies.form', [
            'policy' => new Policy()
        ]);
    }

    public function store(PolicyFormRequest $request)
    {
        $policy = Policy::create($request->validated());

        return to_route('admin.policy.index')->with('success', 'La policy a bien été créée.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Policy $policy)
    {
        return view('admin.policies.form', [
            'policy' => $policy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PolicyFormRequest $request, Policy $policy)
    {
        $policy->update($request->validated());

        return to_route('admin.policy.index')->with('success', 'La policy a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policy $policy)
    {
        $policy->delete();

        return to_route('admin.policy.index')->with('success', 'La policy a bien été supprimée.');
    }
}
