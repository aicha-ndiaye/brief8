<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $evenement->association_id=auth()->guard('association')->user()->id;
        if ($evenement->save()) {
            return redirect('/pageAdmin');
        }
        // if (!Auth::user()->association_id) {
        //     return redirect('/')->with('error', 'Vous devez être associé à une association pour créer un événement.');
        // }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $event=Evenement::all();     //lister les evenements
        return view ('pageAdmin',compact('event'));
    }



    public function voirplus($id ){
        $event=Evenement::FindOrFail($id);
        return view('voirplus',compact('event'));


    }

    public function edit($id){
        $event=Evenement::FindOrFail($id);
        return view('modifieEvent',compact('event'));
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
    public function modifier( $id)
    {
        $evenement=Evenement::FindOrFail($id);
        return view('modifieEvent',compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evenement = Evenement::find($id);
        $evenement->libelle=$request->libelle;
        $evenement->dateEvenement=$request->dateEvenement;
        $evenement->statu=$request->statu;
        $evenement->nombre_de_passe=$request->nombre_de_passe;
        $evenement->adresse=$request->adresse;
        $evenement->image=$request->image;
        $evenement->description=$request->description;
        $evenement->date_limite_inscription=$request->date_limite_inscription;
        if ($evenement->update()) {
            return redirect('/pageAdmin');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $req)
    {
        $evenement= Evenement::FindOrFail($req->id);
        if($evenement->delete()) {
         return back() ;

       }
    }
}
