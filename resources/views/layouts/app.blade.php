<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Colabra</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #ffffff;

        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: #333;
        }

        /* Header Styles */
        .background-image-container {
            position: relative;
            overflow: hidden;
            height: 100vh;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url('{{ asset(' images/landing-image.jpg') }}');
        }

        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.6) 100%);
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .animate-fade-in-left {
            animation: fadeInLeft 1s ease;
        }

        .custom-button {
            color: #fff;
            background-color: transparent;
            border-color: #fff;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: bold;
        }

        /* Hover effect for images */
        .img-hover:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        /* Link Styles */
        .link-heading {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        .link-heading:hover {
            text-decoration: underline;
        }

        /* Feature Section Styles */
        .feature {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Membership Section Styles */
        .membership-button {
            border: 1px solid #000;
            background-color: transparent;
            color: #000;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .membership-button:hover {
            background-color: #000;
            color: #fff;
            text-decoration: none;
        }

        /* Footer Styles */
        footer {
            background-color: #000;
            color: #fff;
            padding: 40px 0;
        }

        footer a.text-white {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a.text-white:hover {
            color: #FFA500;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            @guest
                
                @if (Route::has('register')) 
                <a class="navbar-brand" href="{{ url('/') }}">
                    Colabra
                </a>
                @endif
                @else

                <a class="navbar-brand" href="{{ url('/home') }}">
                    Colabra
                </a>
                @endguest
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    My Membership
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>