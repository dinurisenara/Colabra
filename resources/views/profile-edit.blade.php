@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Profile</h2>

        <form action="{{ route('profile.update') }}" method="post">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <!-- Add other fields that you want to edit -->

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>

        <form action="{{ route('profile.show') }}" method="get" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
@endsection
