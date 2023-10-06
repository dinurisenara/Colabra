@extends( 'layouts.admin' )
@section( 'content' )

 <!-- Search Bar -->
 <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for users..." aria-label="Search for users" aria-describedby="search-button">
        <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button>
    </div>

    <!-- List of Users -->
    
<!-- List of Users -->
<div class="column">
        
        
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text">user@email.com</p>
                    <a href="{{route('admin.user.profile.view')}}" class="btn btn-primary">View User</a>
                </div>
            </div>
        
        <div class="card">
                <div class="card-body ">
                    <h5 class="card-title ">User 1</h5>
                    <p class="card-text">user@email.com</p>
                    <a href="#" class="btn btn-primary ">View User</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User 2</h5>
                    <p class="card-text">user@email.com</p>
                    <a href="#" class="btn btn-primary">View User</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User 3</h5>
                    <p class="card-text">user@email.com</p>
                    <a href="#" class="btn btn-primary">View User</a>
                </div>
            </div>
       
    </div>
</div>

</div>
@endsection