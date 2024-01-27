<?php

namespace App\Http\Controllers;

use App\Models\Space_types;
use App\Models\User;
use Illuminate\Http\Request;
use \App\Models\Reservations;


class ReservationController extends Controller
{
    public function index()
    {
        // Display all reservations, including past ones
        $reservations = Reservations::all();
        $spaceTypes = Space_types::all();


        return view('reservations.index', compact('reservations', 'spaceTypes'));
    }

    public function edit($id)
    {
        // Admins can manually update the status or details of a reservation
        $reservation = Reservations::findOrFail($id);

        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        // Admins can manually update the status or details of a reservation
        $reservation = Reservations::findOrFail($id);
        $user = User::where('name', $request->input('username'))->first();
        $spaceType_customerType = Space_types::where('type', $request->input('space_type'))->first();
        if ($user->customerType == $spaceType_customerType->customer_type) {
            $reservation->update($request->all());

            return redirect()->route('admin.reservations.edit', $reservation->id)
                ->with('success', 'Reservation updated successfully');
        } else {
            return redirect()->route('admin.reservations.edit', $reservation->id)
                ->with('error', 'Reservation not updated successfully');
        }
    }



    public function store(Request $request)
    {
        // Validate the request data
       $request->validate([
            'username' => 'required|string|max:255',
            'space_type_id' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'status' => 'required',
        ]);
        $user = User::where('name', $request->input('username'))->first();
        $spaceType_customerType = Space_types::where('type', $request->input('space_type'))->first();


        if($user && $user->customerType == $spaceType_customerType->customer_type) {
            $reservation = new Reservations();
            $reservation->user_id = $user->id;
            $reservation->space_type_id = $request->input('space_type_id');
            $reservation->start_time = $request->input('start_time');
            $reservation->end_time = $request->input('end_time');
            $reservation->status = $request->input('status');
            $reservation->save();

            return redirect()->route('admin.reservations.index')
                ->with('success', 'Reservation created successfully');
        } else {
            return redirect()->route('admin.reservations.index')
                ->with('error', 'Reservation not created successfully');
        }

//        // Create a new reservation
//        Reservations::create($request[
//            ]);

        // Redirect back to the reservations page

    }






}
