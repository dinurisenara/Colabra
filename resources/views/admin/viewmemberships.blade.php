<!-- resources/views/admin/view-memberships.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">View Memberships</h1>

        @if (session('success'))
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <script>
                // Automatically close the success alert after 5 seconds
                setTimeout(function() {
                    document.getElementById('success-alert').style.display = 'none';
                }, 5000); // 5000 milliseconds = 5 seconds
            </script>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Business Memberships</h2>
                    </div>
                    <div class="card-body">
                        @foreach($memberships->where('customer_type', 'business') as $membership)
                            <div class="mb-3">
                                <!-- Display membership details for business type -->
                                <h3>{{ $membership->plan_name }}</h3>
                                <p>Space Type: {{ $membership->space_type }}</p>
                                <!-- ... other details ... -->

                                <button class="btn btn-primary" onclick="window.location='{{ route('admin.edit.membership', ['id' => $membership->id]) }}'">Edit</button>
                                <button class="btn btn-danger" onclick="window.location='{{ route('admin.delete.membership', ['id' => $membership->id]) }}'">Delete</button>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Personal Memberships</h2>
                    </div>
                    <div class="card-body">
                        @foreach($memberships->where('customer_type', 'personal') as $membership)
                            <div class="mb-3">
                                <!-- Display membership details for personal type -->
                                <h3>{{ $membership->plan_name }}</h3>
                                <p>Space Type: {{ $membership->space_type }}</p>
                                <!-- ... other details ... -->

                                <button class="btn btn-primary" onclick="window.location='{{ route('admin.edit.membership', ['id' => $membership->id]) }}'">Edit</button>
                                <button class="btn btn-danger" onclick="window.location='{{ route('admin.delete.membership', ['id' => $membership->id]) }}'">Delete</button>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

