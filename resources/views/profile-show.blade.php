@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Profile</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Name:</strong> {{ $user->name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="card-text"><strong>Customer Type:</strong> {{ $user->customerType }}</p>
            </div>
        </div>

        <form action="{{ route('profile.edit') }}" method="get">
            @csrf
            <button type="submit" class="btn btn-primary mt-3">Edit Profile</button>
        </form>

        <form action="{{ route('profile.delete') }}" method="post" class="mt-3">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</button>
        </form>
    </div>
@endsection
