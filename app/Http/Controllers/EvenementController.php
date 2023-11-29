<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ajoutEvenement');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $evenement = new Evenement();
        $evenement->libelle=$request->libelle;
        $evenement->dateEvenement=$request->dateEvenement;
        $evenement->statu=$request->statu;
        $evenement->nombre_de_passe=$request->nombre_de_passe;
        $evenement->adresse=$request->adresse;
        $evenement->image=$request->image;
        $evenement->description=$request->description;
        $evenement->date_limite_inscription=$request->date_limite_inscription;
        if ($evenement->save()) {
            return redirect('/pageAdmin');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $event=Evenement::all();
        return view ('pageAdmin',compact('event'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
