<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Reservation;
use App\Notifications\confirmation_de_reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $evenement=Evenement::find($id);
        return view('reservation',compact('evenement'));
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
    public function store(Request $request )
    {
    // dd($request);

        $reserver = new Reservation();
        $user=User::FindOrFail($request->user);
        $reserver->nomInteresse=$request->nomInteresse;
        $reserver->nombrePlace=$request->nombrePlace;
        $reserver->user_id=$request->user;
        $reserver->evenement_id=$request->evenement_id;
        if ($reserver->save()) {
            $user->notify(new confirmation_de_reservation());
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
        $reserve=Reservation::where('evenement_id',auth()->guard('association')->user()->id)->get();
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
