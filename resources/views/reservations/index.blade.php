@extends('layouts.admin')
@section('content')



<div class="container mt-5">
    <h1>All Reservations</h1>


    <!-- New Reservation Form -->
    <form method="post" action="{{ route('admin.reservations.store') }}">
        @csrf

        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="space_type_id">Space Type:</label>
            <select name="space_type_id" class="form-control" required>
                @foreach($spaceTypes as $spaceType)
                    <option value="{{ $spaceType->id }}">{{ $spaceType->type }} ({{$spaceType->customer_type}})</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="datetime-local" name="start_time" class="form-control" required min="{{ now()->toDateTimeString()}}">
        </div>

        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="datetime-local" name="end_time" class="form-control" required min="{{ now()->toDateTimeString()}}">
        </div>


        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control" required>
                <option value="pending" >Pending</option>
                <option value="confirmed" >Confirmed</option>
                <option value="completed" >Completed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Make Reservation</button>
    </form>

    <!-- Reservations Table -->
    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Space Type ID</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->user_id }}</td>
                <td>{{ $reservation->space_type_id }}</td>
                <td>{{ $reservation->start_time }}</td>
                <td>{{ $reservation->end_time }}</td>
                <td>{{ $reservation->status }}</td>
                <td><a href="{{ url('admin/reservations/'.$reservation->id.'/edit') }}" class="btn btn-primary">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection

