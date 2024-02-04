@extends('layouts.app') {{-- Assuming you have an app layout --}}

@section('content')

    <!-- New Reservation Form -->
    <div class="container mt-5  ">
        <h1>Make a Reservation</h1>
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




        <button type="submit" class="btn btn-primary">Make Reservation</button>
    </form>
    </div>

@endsection


