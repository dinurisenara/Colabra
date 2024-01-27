<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingsRequest;
use App\Http\Resources\BookingsResource;
use App\Models\Bookings;
use App\Models\Reservations;
use App\Models\Space_types;
use App\Models\Spaces;
use App\Models\User;
use Illuminate\Http\Request;



class BookingsController extends Controller
{
    public function index()
    {
        $reservations = Reservations::all();
        $spaceTypes = Space_types::all();
        return view('admin.admin-makebookings' , compact('reservations', 'spaceTypes'));
    }

    /**
     * @throws \Exception
     */
    public function store( Request $request)
    {
        // Validation
        $request->validate([
            'customerUsername' => 'required|string',
            'spaceType' => 'required|exists:space_types,id',
            'startTime' => 'required',
            'endTime' => 'required',
            'price' => 'required|numeric',
        ]);



        $user = User::where('name', $request->input('customerUsername'))->first();
        $space = Spaces::where('type_id', $request->input('spaceType'))->first();
        $spaceType = Space_types::where('id', $request->input('spaceType'))->first();
        // Calculate price based on hourly rate and duration
        $startTime = new \DateTime($request->input('startTime'));
        $endTime = new \DateTime($request->input('endTime'));
        $hourlyRate = $spaceType->hourly_rate;

        $durationInHours = $startTime->diff($endTime)->h + $startTime->diff($endTime)->days * 24;
        $totalPrice = $hourlyRate * $durationInHours;




//            $booking = Bookings::create([
//                'user_id' => $user->id,
//                'space_id' => $space->id,
//                'start_time' => $startTime,
//                'end_time' => $endTime,
//                'price' => $totalPrice,
//            ]);

            $booking = new Bookings();

            $booking->user_id = $user->id;
            $booking->space_id = $space->id;
            $booking->start_time = $startTime;
            $booking->end_time = $endTime;
            $booking->price = $totalPrice;
            $booking->save();


            return view('admin.admin-makebookings', compact('booking'));



    }

    public function show(Bookings $bookings)
    {
        return new BookingsResource($bookings);
    }

    public function update(BookingsRequest $request, Bookings $bookings)
    {
        $bookings->update($request->validated());

        return new BookingsResource($bookings);
    }

    public function destroy(Bookings $bookings)
    {
        $bookings->delete();

        return response()->json();
    }
}
