<!-- resources/views/spaces.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">Spaces</h2>
        <div class="row justify-content-center">
            @foreach($space_types as $space)
                <div class="col-md-4 mb-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$space->type}}</h5>
                            <p class="card-text">Capacity: {{$space->capacity}}</p>
                            <p class="card-text">Customer Type: {{$space->customer_type}}</p>
                            <p class="card-text">${{ $space->hourly_rate}} per hour</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .custom-card {
            border: none; /* Remove border */
            border-radius: 15px; /* Border radius */
            background-color: #99a493; /* Greenish-grey background color */
            color: #000000; /* Black text color */
            opacity: 0.9; /* Adjust transparency */
            transition: transform 0.3s ease-in-out; /* Add animation effect */
        }

        .custom-card:hover {
            transform: scale(1.05); /* Zoom in on hover */
        }

        body {
            background: url('{{ asset('/images/home-side.png') }}') no-repeat center center fixed;
            background-size: cover;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
    </style>
@endsection
