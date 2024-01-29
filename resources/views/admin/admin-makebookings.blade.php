@extends('layouts.admin')

@section('content')
    <div class="container mt-4" id="bookingform">
        <h2>Make a Booking</h2>

        <form action="{{ route('admin.bookings.store') }}" method="post" id="bookingForm">

            @csrf
            <!-- Customer Username -->
            <div class="mb-3">
                <label for="customerUsername" class="form-label">Customer Username:</label>
                <input type="text" class="form-control" id="customerUsername" name="customerUsername" required>
            </div>

            <!-- Space Type -->
            <div class="mb-3">
                <label for="spaceType" class="form-label">Space Type:</label>
                <select class="form-select" id="spaceType" name="spaceType" required>

                    {{{$spaceTypes = App\Models\Space_types::all()}}}
                    @foreach($spaceTypes as $spaceType)
                        <option value="{{ $spaceType->id }} " data-hourly-rate="{{ $spaceType->hourly_rate }}">{{ $spaceType->type }} ({{ $spaceType->customer_type }})</option>
                    @endforeach
                </select>
            </div>

            <!-- Start Time -->
            <div class="mb-3">
                <label for="startTime" class="form-label">Start Time:</label>
                <input type="datetime-local" class="form-control" id="startTime" name="startTime" required>
                <small id="startTimeError" class="text-danger"></small>
            </div>

            <!-- End Time -->
            <div class="mb-3">
                <label for="endTime" class="form-label">End Time:</label>
                <input type="datetime-local" class="form-control" id="endTime" name="endTime" required>
                <small id="endTimeError" class="text-danger"></small>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" class="form-control" id="price" name="price" readonly required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <div class="container mt-4">
            <h2>Booking Records</h2>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Username</th>
                    <th>Space </th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Price</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->customerUsername }}</td>

                        <td>{{ $spaces->where('id', $booking->space_id)->first()->name ?? 'Unknown Space' }}</td>

                        <td>{{ $booking->startTime }}</td>
                        <td>{{ $booking->endTime }}</td>
                        <td>{{ $booking->price }}</td>
                        <td>{{ $booking->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>

    <!-- Add this script at the end -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('bookingForm');
            const startTimeInput = document.getElementById('startTime');
            const endTimeInput = document.getElementById('endTime');
            const priceInput = document.getElementById('price');
            const spaceTypeSelect = document.getElementById('spaceType');
            const startTimeError = document.getElementById('startTimeError');
            const endTimeError = document.getElementById('endTimeError');

            const now = new Date();
            const formattedNow = now.toISOString().slice(0, 16); // Format as "YYYY-MM-DDTHH:mm"

            // Set the min attribute for Start Time and End Time to restrict past dates
            startTimeInput.setAttribute('min', formattedNow);
            endTimeInput.setAttribute('min', formattedNow);

            form.addEventListener('submit', function (event) {
                event.preventDefault();

                const startTime = new Date(startTimeInput.value);
                const endTime = new Date(endTimeInput.value);

                if (startTime >= endTime) {
                    startTimeError.textContent = 'Start time must be before end time';
                    endTimeError.textContent = 'Start time must be before end time';
                    return;
                }

                startTimeError.textContent = '';
                endTimeError.textContent = '';

                const hourlyRate = parseFloat(spaceTypeSelect.options[spaceTypeSelect.selectedIndex].getAttribute('data-hourly-rate'));
                const timeDiffInHours = (endTime - startTime) / (1000 * 60 * 60);
                const totalPrice = hourlyRate * timeDiffInHours;

                priceInput.value = totalPrice.toFixed(2);

                form.submit();
            });

            startTimeInput.addEventListener('input', updatePrice);
            endTimeInput.addEventListener('input', updatePrice);

            function updatePrice() {
                const startTime = new Date(startTimeInput.value);
                const endTime = new Date(endTimeInput.value);

                if (startTime >= endTime) {
                    startTimeError.textContent = 'Start time must be before end time';
                    endTimeError.textContent = 'Start time must be before end time';
                    return;
                }

                startTimeError.textContent = '';
                endTimeError.textContent = '';

                const hourlyRate = parseFloat(spaceTypeSelect.options[spaceTypeSelect.selectedIndex].getAttribute('data-hourly-rate'));
                const timeDiffInHours = (endTime - startTime) / (1000 * 60 * 60);
                const totalPrice = hourlyRate * timeDiffInHours;

                priceInput.value = totalPrice.toFixed(2);
            }
        });
    </script>
@endsection
