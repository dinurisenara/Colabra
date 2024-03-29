<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+nbE6jFp5s1Um4c2hpgpJGwzqqX8qbWf5Ow5v9w5FlB1FjHI" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/app.css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Colabra</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
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
            background-image: url('{{ asset("images/landing-image.jpg") }}');
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        @include('layouts.navbar')



        <main>
            @yield('content')
        </main>
    </div>
</body>
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact Information</h5>
                <p>123 Main Street, City</p>
                <p>Email: info@colabra.com</p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">

                    <li><a href="#" class="text-white">Memberships</a></li>
                    <li><a href="#" class="text-white">Facilities</a></li>
                    <li><a href="#" class="text-white">About</a></li>
                    <li><a href="/contact" class="text-white">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Connect With Us</h5>
                <a href="#"><i class="fab fa-facebook-square fa-lg mr-2 text-white"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-lg mr-2 text-white"></i></a>
                <a href="#"><i class="fab fa-linkedin fa-lg mr-2 text-white"></i></a>
                <a href="#"><i class="fab fa-instagram-square fa-lg mr-2 text-white"></i></a>
            </div>
        </div>
    </div>
</footer>

</html>
