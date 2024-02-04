@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Reservation History</h2>

        @if(count($reservations) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>Space Type</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{ $spaceTypes->where('id', $reservation->space_type_id)->first()->type }}</td>
                        <td>{{ $reservation->start_time }}</td>
                        <td>{{ $reservation->end_time }}</td>
                        <td>{{ $reservation->status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No reservations found.</p>
        @endif
    </div>
@endsection
