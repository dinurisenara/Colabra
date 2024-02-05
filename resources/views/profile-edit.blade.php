@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Profile</h2>

        <div class="mx-auto" style="max-width: 400px;">
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

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>

            <form action="{{ route('profile.show') }}" method="get" class="text-center mt-5 pb-5">
                @csrf
                <button type="submit" class="btn btn-secondary">Cancel</button>
            </form>
        </div>
    </div>
@endsection
