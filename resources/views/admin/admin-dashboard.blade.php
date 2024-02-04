@extends('layouts.admin')

@section('content')




<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-3">
            <a class="card bg-primary text-white text-center"  href="{{route('admin.manage.users')}}">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">View and edit user profiles</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card bg-success text-white text-center">

                <a class="card bg-dark text-white text-center" href="{{route('admin.view.memberships')}}">
                    <div class="card-body">
                        <h5 class="card-title">View memberships</h5>
                        <p class="card-text">Add new members</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
            <a class="card bg-success text-white text-center" href="{{route('admin.add.user')}}">
                <div class="card-body">
                    <h5 class="card-title">Add User</h5>
                    <p class="card-text">Add new members</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <a class="card bg-warning text-black text-center" href="{{ route('admin.manage.memberships') }}">
                <div class="card-body">
                    <h5 class="card-title">Add Memberships</h5>
                    <p class="card-text">Update membership plans</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <a class="card bg-danger text-white text-center" href="{{route('admin.reservations.index')}}">

                <div class="card-body">
                    <h5 class="card-title">Reservations</h5>
                    <p class="card-text">View and manage reservations</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <a class="card bg-info text-black text-center" href="{{route('admin.bookings.index')}}">
                <div class="card-body">
                    <h5 class="card-title">Bookings</h5>
                    <p class="card-text">Manage room and desk bookings</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <a class="card  bg-secondary text-black  text-white text-center" href="{{route('admin.messages')}}">
                <div class="card-body">
                    <h5 class="card-title">Messeges</h5>
                    <p class="card-text">Manage room and desk bookings</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <a class="card bg-success text-black text-center" href="{{route('admin.admin.analytics')}}">
                <div class="card-body">
                    <h5 class="card-title">Analytics</h5>
                    <p class="card-text">Manage room and desk bookings</p>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
