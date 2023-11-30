<?php

use App\Models\Evenement;
use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/dashbord', function () {
    return view('dashbord');
});

Route::get('/pagemsg', function () {
    return view('pagemsg');
});





Route::post('/auth',[UserController::class,'authenticate']);

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/pageAdmin', function () {
        return view('pageAdmin');
    });
});




Route::get('/inscription',[UserController::class,'create']);
Route::post('/inscriptionUser',[UserController::class,'store']);
Route::get('/connexion',[UserController::class,'connexion']);
Route::post('/auth',[UserController::class,'authenticate']);
Route::get('/pageUser',[UserController::class,'show']);
Route::get('pageUser', [UserController::class,'show']);


Route::get('/formassociation',[AssociationController::class,'create']);
Route::post('/formasso',[AssociationController::class,'store']);
Route::get('/connecterassos',[AssociationController::class,'connecter']);
Route::post('/assos',[AssociationController::class,'authenticate']);

Route::get('/ajoutEvenement',[EvenementController::class,'index']);
Route::post('/ajout',[EvenementController::class,'create']);
Route::get('/pageAdmin',[EvenementController::class,'store']);
Route::get('/voirplus/{id}',[EvenementController::class,'voirplus']);
Route::post('/modifieEvent/{id}',[EvenementController::class,'update']);
Route::get('/modification/{evenement}',[EvenementController::class,'modifier']);
Route::get('/supprimerEve/{id}',[EvenementController::class,'delete']);

Route::post('/users/{userId}/reservations/{reservationid}', [ReservationController::class,'Reservations']);
Route::post('reservation', [ReservationController::class,'store']);
Route::get('reservation/{id}', [ReservationController::class,'index']);
Route::get('listeReservation', [ReservationController::class,'show']);
Route::get('listeReservation', [ReservationController::class,'listeReserv']);

