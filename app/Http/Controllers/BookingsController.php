<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingsRequest;
use App\Http\Resources\BookingsResource;
use App\Models\Bookings;

class BookingsController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Bookings::class);

        return BookingsResource::collection(Bookings::all());
    }

    public function store(BookingsRequest $request)
    {
        $this->authorize('create', Bookings::class);

        return new BookingsResource(Bookings::create($request->validated()));
    }

    public function show(Bookings $bookings)
    {
        $this->authorize('view', $bookings);

        return new BookingsResource($bookings);
    }

    public function update(BookingsRequest $request, Bookings $bookings)
    {
        $this->authorize('update', $bookings);

        $bookings->update($request->validated());

        return new BookingsResource($bookings);
    }

    public function destroy(Bookings $bookings)
    {
        $this->authorize('delete', $bookings);

        $bookings->delete();

        return response()->json();
    }
}
