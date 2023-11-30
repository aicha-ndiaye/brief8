<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservation');
    }

    /**
     * Show the form for creating a new resource.
     */
        public function Reservations($userId)
        {
            $user = User::findOrFail($userId);

            foreach ($user->roles as $evenement) {
                foreach ($evenement->reservation as $reservation) {
                    return view('user.reservations', ['reservations' => $reservation]);
                }
            }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $reserver = new Reservation();
        $reserver->nomInteresse=$request->nomInteresse;
        $reserver->nombrePlace=$request->nombrePlace;
        $reserver->user_id=auth()->guard('association')->user()->id;
        $reserver->evenement_id=auth()->guard('association')->user()->id;
        if ($reserver->save()) {
            return redirect('/pagemsg');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('listeReservation');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function listeReserv()
    {
        $reserve=Reservation::all();

        return view('listeReservation',compact('reserve'));
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
