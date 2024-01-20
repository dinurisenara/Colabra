@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="row">
        <!-- Form for adding a new membership plan (occupies half of the page) -->
        <div class="col-md-6">
            <div class="card bg-light border-purple">
                <div class="card-body">
                    <h5 class="card-title">Add New Membership Plan</h5>
                    <!-- Add your membership plan form here -->
                    <!-- You can include form fields for plan name, description, price, etc. -->
                    <form method="post" action="{{ route('admin.store.memberships') }}">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="name" class="form-label">Plan Name</label>
                            <input type="text" class="form-control" id="planName" name="planName">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">User type</label>
                            <select class="form-select" id="user_type" name="user_type">
                                <option value="personal">Personal Memberships</option>
                                <option value="company">Company Memberships</option>
                               
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="planDescription" name="planDescription" rows="3"></textarea>
                        </div>

                        
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="planPrice" name="planPrice">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>


        <div class="col-md-6">

            <div class="container mt-5">
                <div class="row">
                    @foreach($membershipPlans as $plan)
                    <div class="col-md-4 mb-4">
                        <div class="card text-center bg-light border-purple mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $plan->planName }}</h5>
                                <p class="card-text">{{ $plan->planDescription }}</p>
                                <p class="card-text">{{ $plan->planPrice }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- ... (other membership cards) ... -->
        </div>
    </div>
</div>




@endsection