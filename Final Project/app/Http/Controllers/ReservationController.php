<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all()->load('user', 'car');

        return view('pages.dashboard-reservations', compact('reservations'));
    }

    // Create a new reservation
    public function store(Request $request, Car $car)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'CIN' => 'required|string',
            'phone_number' => 'required|string',
            'driving_licence_number' => 'required|string',
            'date_of_birth' => 'required|date',
        ]);


        $reservation = new Reservation();
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->CIN = $request->CIN;
        $reservation->phone_number = $request->phone_number;
        $reservation->driving_licence_number = $request->driving_licence_number;
        $reservation->date_of_birth = $request->date_of_birth;
        $reservation->user_id = $request->user()->id;
        $reservation->car_id = $car->id;
        $reservation->status = 'Pending';
        $reservation->save();

        // return response()->json(['message' => 'Reservation created successfully!', 'reservation' => $reservation], 201);
        return back();
    }

    public function myReservations()
    {
        $userId = Auth::id();
        $reservations = Reservation::where('user_id', $userId)->get();
        return view('pages.dashboard-myreservations', compact('reservations'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $reservation = Reservation::find($request->id);
        
        $reservation->status = $request->input('status');
        
        $reservation->update();
        
        return $this->index();
    }

    /**
     * Remove the specified reservation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        
        return $this->index();
    }

}
