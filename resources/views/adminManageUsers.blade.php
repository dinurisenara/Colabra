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
    
<div class="row">
    @foreach($users as $user)
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">{{ $user->email }}</p>
                <a href="{{ route('admin.user.profile.view', ['id' => $user->id]) }}" class="btn btn-primary">View User</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

        
            
    
</div>

</div>
@endsection