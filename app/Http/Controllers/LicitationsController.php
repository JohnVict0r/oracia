<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Licitation;
use App\Http\Requests\StoreLicitation;
use App\Http\Requests\UpdateLicitation;

class LicitationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licitations = Licitation::all();
        return view('licitations.index', compact($licitations));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('licitations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicitation $request)
    {
        //$this->authorize('create', Licitation::class);
        $input = $request->validated();
        
        Licitation::create($input); // Armazena a licitação
        
        return redirect('licitations')->with('status', 'licitation.created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $licitation = Licitation::find($id);
        //$this->authorize('view', $licitation);
        return view('licitations.show', compact('licitation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $licitation = Licitation::find($id);
        //$this->authorize('update', $licitation);
        return view('licitations.edit', compact('licitation'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLicitation $request, $id)
    {
    	$licitation = Licitation::find($id);
        //$this->authorize('update', $licitation);
        $input = $request->validated();
        $licitation->update($input);

        return redirect('licitations')->with('status', 'licitation.updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $licitation = Licitation::find($id);
        $licitation->delete();

        return redirect('licitations')->with('status', 'licitation.deleted');

    }
}
