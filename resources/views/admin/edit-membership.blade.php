<!-- resources/views/admin/edit-membership.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1>Edit Membership</h1>

        <form action="{{route('admin.update.membership',['id' => $membership->id] )}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" value="{{ $membership->plan_name }}" class="form-control" required>
            </div>
            <div class="mb3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="price" value="{{ $membership->price }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="spaceType" class="form-label">Space Type:</label>
                <input type="text" name="spaceType" value="{{ $membership->space_type }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="customerType" class="form-label">Customer Type:</label>
                <select name="customerType" class="form-select" required>
                    <option value="" disabled>Select Customer Type</option>
                    <option value="business" {{ $membership->customer_type === 'business' ? 'selected' : '' }}>Business</option>
                    <option value="personal" {{ $membership->customer_type === 'personal' ? 'selected' : '' }}>Personal</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="timePeriod" class="form-label">Time Period:</label>
                <input type="text" name="timePeriod" value="{{ $membership->time_period }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" class="form-control">{{ $membership->description }}</textarea>
            </div>

            <!-- Add editable fields for other attributes -->

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
