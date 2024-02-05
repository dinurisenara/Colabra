@extends('layouts.app')

@section('content')
    <style>
        .custom-card {
            border: 2px solid;
            border-image: linear-gradient(to right, #b8c6db, #6a8fa5, #1f3f55, #50746b, #82a5a7);
            border-image-slice: 1;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .custom-card:hover {
            transform: scale(1.05);
        }

        .custom-bg {
            position: relative;
            background-image: url('{{ asset('images/membership-plans-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .custom-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;

        }

        .btn-custom {
            background-color: #ff7e5f;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #e25d40;
        }

        .card-title {
            color: #333;
            font-size: 1.5rem;
        }

        .card-text {
            color: #555;
        }

        h2 {
            font-size: 2.5rem;
            color: #333;
        }
    </style>

    <div class="container-fluid custom-bg">
        <h2 class="text-center pt-2 pl-5 ml-5 mb-5">Membership Plans</h2>

        <div class="custom-overlay"></div>

        <div class="container pt-5 pb-5 mt-5 mb-5">



            @guest()
                <div class="row">
                    @foreach($membership_plans as $membership_plan)
                        <div class="col-md-4 mb-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $membership_plan->plan_name }}</h5>
                                    <p class="card-text mb-2">Type: {{$membership_plan->customer_type}}</p>
                                    <p class="card-text mb-2"> {{ $membership_plan->time_period }}</p>
                                    <a href="{{ route('login') }}" class="btn btn-custom btn-block">Sign in to see more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endguest

            @auth()
                <div class="row">
                    @foreach($membership_plans as $membership_plan)
                        <div class="col-md-4 mb-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $membership_plan->plan_name }}</h5>
                                    <p class="card-text mb-2">{{ $spaceTypes->where('id', $membership_plan->space_type)->first()->type }}</p>
                                    <p class="card-text mb-2">Type: {{$membership_plan->customer_type}}</p>
                                    <p class="card-text mb-2"> {{ $membership_plan->time_period }}</p>
                                    <p class="card-text mb-2"> ${{ $membership_plan->price }}</p>
                                    <p class="card-text mb-2">{{$membership_plan->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endauth
        </div>
    </div>
@endsection
