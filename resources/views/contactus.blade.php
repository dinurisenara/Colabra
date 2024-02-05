<!-- resources/views/contactus.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100" style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('/images/desks.jpg') }}'); background-size: cover; background-blend-mode: overlay;">
        <div class="card p-5" style="background-color: rgba(255,255,255,0.9);"> <!-- Adjust alpha (0.9) for transparency -->
            <h2 class="text-center mb-4">Contact Us</h2>

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4" required></textarea>
                    @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
@endsection
