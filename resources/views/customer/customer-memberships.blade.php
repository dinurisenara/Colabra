@extends('layouts.app')
@section('content')
    <div class="container pb-5 mb-5 mt-5" >
        <h2>Membership Plans</h2>
@guest()


        <div class="row">
            @foreach($membership_plans as $membership_plan)
                <div class="col-md-4 mb-4">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $membership_plan->plan_name }}</h5>
                            <p class="card-text">Type: {{$membership_plan->customer_type}}</p>
                            <p class="card-text"> {{ $membership_plan->time_period }}</p>

                            <a href="{{ route('login') }}">  <button type="button"  class="btn btn-primary" >Sign in to see more </button> </a>


                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        @endguest
    </div>

@endsection
