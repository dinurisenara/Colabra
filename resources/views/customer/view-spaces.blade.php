@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Spaces</h2>
        <div class="row">
            @foreach($space_types as $space)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$space->type}}</h5>
                            <p class="card-text">Capacity: {{$space->capacity}}</p>
                            <p class="card-text"> Customer Type: {{ $space->customer_type }}</p>
                            <p class="card-text"> {{ $space->hourly_rate}}</p>

                            <a href="{{ route('login') }}">
                                <button type="button" class="btn btn-primary">Sign in to see more</button>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection
