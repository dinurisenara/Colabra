@extends('layouts.app')

@section('content')
    <div class="container  pb-5 mb-5 mt-5">
        <h2 class="text-center mb-4">Profile</h2>
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <p class="card-text"><strong>Name:</strong> {{ $user->name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="card-text"><strong>Customer Type:</strong> {{ $user->customerType }}</p>
            </div>
        </div>

        <div class="text-center mt-3">
            <form action="{{ route('profile.edit') }}" method="get" style="display: inline-block;">
                @csrf
                <button type="submit" class="btn btn-primary">Edit Profile</button>
            </form>

            <form action="{{ route('profile.delete') }}" method="post" style="display: inline-block;">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</button>
            </form>
        </div>
    </div>

    <script>
        // Add dynamic form validations
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButton = document.querySelector('.btn-danger');

            deleteButton.addEventListener('click', function () {
                const confirmed = confirm('Are you sure you want to delete your profile?');
                if (!confirmed) {
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection
