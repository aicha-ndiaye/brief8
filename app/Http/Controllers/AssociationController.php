<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formassociation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $assos = new Association();
        $assos->nom = $request->nom;
        $assos->date_creation= $request->date_creation;
        $assos->slogan = $request->slogan;
        $assos->password = Hash::make($request->password);
        $assos->logo = $request->logo;
        $assos->email = $request->email;


        if ($assos->save()) {
            return redirect('/connecterassos');
        }
    }
    public function connecter()
    {
        return view('connecterassos');
    }


    public function authenticate(Request $request)
    {




        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $test=auth()->guard('association')->attempt(['email'=>$request->email,'password'=>$request->password]);
        //dd($test);
        if($test){
            return redirect()->intended('pageAdmin');
        }
      


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
