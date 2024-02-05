@extends('layouts.app')

@section('content')

    <!-- New Reservation Form -->
    <div class="container d-flex justify-content-center align-items-center vh-100" style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{asset('/images/reservations.jpg')}}'); background-size: cover; background-blend-mode: overlay;">
        <div class="card p-5" style="background-color: rgba(255,255,255,0.8);">
            <h1 class="text-center mb-4">Make a Reservation</h1>
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
                            <option value="{{ $spaceType->id }}">{{ $spaceType->type }} ({{ $spaceType->customer_type }})</option>
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

                <button type="submit" class="btn btn-success btn-block">Make Reservation</button>
            </form>
        </div>
    </div>

@endsection
