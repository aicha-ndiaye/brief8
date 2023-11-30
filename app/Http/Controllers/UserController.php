<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        return view('inscription');
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(Request $request)
    {
        // $request->validate([
        //     'nom' => 'required|min:2|max:20',
        //     'prenom' => 'required|min:2|max:20',
        //     'email' => 'required|email|unique:users',
        //     'password' => [
        //         'required',
        //         'regex:/^(?=.*[A-Z])(?=.*\d).{2,}$/',
        //     ],
        //     'telephone' => [
        //         'required',
        //         'regex:/^(77|78|76|70|75)\d{10}$/',
        //     ],
        // ]);

        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->telephone = $request->telephone;
        $user->role = 'user';

        if ($user->save()) {
            return redirect('/connexion');
        }
    }



    //partie connexion
    public function connexion()
    {
        return view('connexion');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('pageUser');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }





    /**
     * Display the specified resource.
     */
    public function show()
    {
        $event=Evenement::all();

        return view('pageUser',compact('event'));
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
