@extends('layouts.admin')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Profile</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item"><strong>Mobile Number:</strong> {{ $user->mobile_number }}</li>
                        <li class="list-group-item"><strong>Registered Date:</strong> {{ $user->created_at->format('F d, Y') }}</li>
                        <!-- Add more user details here -->
                    </ul>
                    <!-- Add user memberships, bookings, and reservations as needed -->
                    <div class="mt-3">
                        <a href="#" class="btn btn-primary">Edit User</a>
                        <a href="#" class="btn btn-danger">Delete User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection