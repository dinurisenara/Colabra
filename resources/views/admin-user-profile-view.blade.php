@extends('layouts.admin')

@section('content')



<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Profile</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> John Doe</li>
                        <li class="list-group-item"><strong>Email:</strong> user@email.com</li>
                        <li class="list-group-item"><strong>Mobile Number:</strong> +1 (123) 456-7890</li>
                        <li class="list-group-item"><strong>Registered Date:</strong> January 15, 2023</li>
                        <li class="list-group-item"><strong>Active Memberships:</strong> Membership A, Membership B</li>
                        <li class="list-group-item"><strong>Bookings:</strong> Room A (Date: Jan 20, 2023)</li>
                        <li class="list-group-item"><strong>Reservations:</strong> Desk 1 (Date: Jan 22, 2023)</li>
                    </ul>
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