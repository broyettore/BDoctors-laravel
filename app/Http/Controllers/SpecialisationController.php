<?php

namespace App\Http\Controllers;

use App\Models\Specialisation;
use App\Http\Requests\StoreSpecialisationRequest;
use App\Http\Requests\UpdateSpecialisationRequest;

class SpecialisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialisations = Specialisation::all();
        return view('admin.specialisation.index', compact('specialisations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.specialisation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecialisationRequest $request)
    {
        $data = $request->validated();
        //salvo dati in arrivo dal form
        $data = $request->all();

        $new_specialisation = new Specialisation();

        $new_specialisation->fill($data);

        $new_specialisation->save();

        return to_route('admin.specialisation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialisation $specialisation)
    {
        return view('admin.specialisation.show', compact('specialisation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialisation $specialisation)
    {
        return view('admin.specialisation.edit', compact('specialisation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecialisationRequest $request, Specialisation $specialisation)
    {
        $data = $request->validated();

        $specialisation->update($data);

        $specialisation->save();

        // Redirect alla pagina di visualizzazione dei dettagli o mostrare un messaggio di successo
        session()->flash('success', 'Modifica avvenuta con successo.');
        return redirect()->route('admin.specialisation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialisation $specialisation)
    {
        $specialisation->delete();
        session()->flash('succes', 'Succesfully Delete');
        return redirect()->route('admin.specialisation.index');
    }
}
