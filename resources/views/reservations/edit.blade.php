@extends('layouts.admin');
@section('content')

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Edit Reservation</title>--}}
{{--    <!-- Bootstrap CSS Link -->--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
{{--</head>--}}
{{--<body>--}}

<div class="container mt-5">
    <h1>Edit Reservation</h1>

    <form method="post" action="{{ url('admin/reservations/'.$reservation->id) }}" id="reservationForm">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="start_time" min="{{ now()->toDateTimeLocalString() }}">Start Time:</label>
            <input type="datetime-local" name="start_time" class="form-control" value="{{ $reservation->start_time->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="datetime-local" min="{{ now()->toDateTimeLocalString() }}" name="end_time" class="form-control" value="{{ $reservation->end_time->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control" required>
                <option value="pending" {{ $reservation->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ $reservation->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="completed" {{ $reservation->status === 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-primary" onclick="goBack()">Go back</button>
            <button type="button" class="btn btn-primary" onclick="cancelSubmission()">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>
</div>

<!-- Bootstrap JS and Popper.js Links (Required for Bootstrap components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function goBack() {
        window.history.back();
    }

    function cancelSubmission() {
        document.getElementById('reservationForm').reset();
    }
</script>

{{--</body>--}}
{{--</html>--}}
@endsection
