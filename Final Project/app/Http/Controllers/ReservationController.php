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
        $reservation->save();

        // return response()->json(['message' => 'Reservation created successfully!', 'reservation' => $reservation], 201);
        return back();
    }

    // Get a single reservation
    public function show(Request $request, $id)
    {
    $reservation = Reservation::with('user', 'car')->find($id);
    if (!$reservation) {
        return response()->json(['message' => 'Reservation not found!'], 404);
    }

    // Check if the authenticated user has the same ID as the reservation user ID
    if (Auth::id() !== $reservation->user_id) {
        // Check if the authenticated user has the "view my reservations" permission
        if (!Auth::user()->can('view my reservations')) {
            // Check if the authenticated user has the "view all reservations" permission
            if (!Auth::user()->can('view all reservations')) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }
        }
    }

    return response()->json(['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        
        if (!$reservation) {
            return response()->json([
                'message' => 'Reservation not found'
            ], 404);
        }
        
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'CIN' => 'required|string',
            'phone_number' => 'required|string',
            'driving_licence_number' => 'required|string',
            'date_of_birth' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 400);
        }
        
        $reservation->start_date = $request->input('start_date');
        $reservation->end_date = $request->input('end_date');
        $reservation->CIN = $request->input('CIN');
        $reservation->phone_number = $request->input('phone_number');
        $reservation->driving_licence_number = $request->input('driving_licence_number');
        $reservation->date_of_birth = $request->input('date_of_birth');
        $reservation->user_id = $request->input('user_id');
        $reservation->car_id = $request->input('car_id');
        
        $reservation->save();
        
        return response()->json([
            'message' => 'Reservation updated successfully',
            'reservation' => $reservation
        ], 200);
    }

    /**
     * Remove the specified reservation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        
        if (!$reservation) {
            return response()->json([
                'message' => 'Reservation not found'
            ], 404);
        }
        
        $reservation->delete();
        
        return response()->json([
            'message' => 'Reservation deleted successfully'
        ], 200);
    }

}
