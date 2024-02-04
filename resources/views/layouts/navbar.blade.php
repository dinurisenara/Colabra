<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @if (Auth::check())
                <a class="navbar-brand" href="{{ url('/home') }}">Colabra</a>
                @else
                <a class="navbar-brand" href="{{ url('/') }}">Colabra</a>
                @endif
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('memberships.view') }}">Membership Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('reservation.view')}}">Make a reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('spaces.view')}}">Spaces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact.index')}}">Contact Us</a>
                        </li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto"> <!-- Use ml-auto to move items to the right -->
                        <!-- Authentication Links -->

                        @guest
                        @if (Route::has('login') && !request()->is('login')) <!-- Check if not on the login page -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>




                        @endif

                        @if (Route::has('register') && !request()->is('register')) <!-- Check if not on the register page -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>


                        @endif
                        @else


                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-transparent dropdown-toggle" type="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                        <a class="dropdown-item" href="{{ route('profile.show') }}">View Profile</a>
                                        <a class="dropdown-item" href="{{route('reservation.history')}}">View My Reservations</a>
                                    </div>
                                </div>
                            </li>

                            {{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
    <!-- Bootstrap CSS and JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</nav>

