<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationsRequest;
use App\Http\Resources\ReservationsResource;
use App\Models\Reservations;

class ReservationsController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Reservations::class);

        return ReservationsResource::collection(Reservations::all());
    }

    public function store(ReservationsRequest $request)
    {
        $this->authorize('create', Reservations::class);

        return new ReservationsResource(Reservations::create($request->validated()));
    }

    public function show(Reservations $reservations)
    {
        $this->authorize('view', $reservations);

        return new ReservationsResource($reservations);
    }

    public function update(ReservationsRequest $request, Reservations $reservations)
    {
        $this->authorize('update', $reservations);

        $reservations->update($request->validated());

        return new ReservationsResource($reservations);
    }

    public function destroy(Reservations $reservations)
    {
        $this->authorize('delete', $reservations);

        $reservations->delete();

        return response()->json();
    }
}
