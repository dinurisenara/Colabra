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
                    <form>
                        <div class="mb-3">
                            <label for="planName" class="form-label">Plan Name</label>
                            <input type="text" class="form-control" id="planName">
                        </div>
                        <div class="mb-3">
                            <label for="planDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="planDescription" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="planPrice" class="form-label">Price</label>
                            <input type="text" class="form-control" id="planPrice">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Display existing membership plans in tiles (occupies half of the page) -->
        <div class="col-md-6">
            <!-- Sample membership plans (you can add more as needed) -->
            <!-- Membership card 1 -->
            <div class="card text-center bg-light border-purple mb-3">
            <div class="card-body">
                    <h5 class="card-title">Membership 1</h5>
                    <p class="card-text">Description of Membership 1.</p>
                </div>
            </div>

            <div class="card text-center bg-light border-purple mb-3">
            <div class="card-body">
                    <h5 class="card-title">Membership 2</h5>
                    <p class="card-text">Description of Membership 2.</p>
                </div>
            </div>

            <div class="card text-center bg-light border-purple mb-3">
            <div class="card-body">
                    <h5 class="card-title">Membership 3</h5>
                    <p class="card-text">Description of Membership 3.</p>
                </div>
            </div>

            <div class="card text-center bg-light border-purple mb-3">
            <div class="card-body">
                    <h5 class="card-title">Membership 4</h5>
                    <p class="card-text">Description of Membership 4.</p>
                </div>
            </div>

            <div class="card text-center bg-light border-purple mb-3">
            <div class="card-body">
                    <h5 class="card-title">Membership 5</h5>
                    <p class="card-text">Description of Membership 5.</p>
                </div>
            </div>

            <!-- ... (other membership cards) ... -->
        </div>
    </div>
</div>




@endsection
