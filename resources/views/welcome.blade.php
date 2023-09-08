<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/app.css" rel="stylesheet">
    <title>Colabra</title>



    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery, Popper.js, and Bootstrap 5 JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #e1e1e1;
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
            background-image: url('{{ asset('images/landing-image.jpg') }}');
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

<body class="antialiased">
    <div class="background-image-container">
        <div class="background-image"></div>
        <div class="gradient-overlay"></div>

        Navbar
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/home">Colabra</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="navbar-nav ms-auto">
                    <div class="nav-item">
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        @endif
                        @endif
                    </div>
                    <div class="nav-item">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav> 


        <!-- Overlay Text Container -->
        <div class="container mt-4 text-white overlay-text">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h1 class="mb-4 display-1">Welcome to Colabra</h1>
                </div>
                <div class="col-lg-6 animate-fade-in-left left-aligned-text">
                    <br><br>
                    <p>Work your own way at Colabra. Discover the perfect solution to your workspace needs from private offices, dedicated desks, open desks, meeting and boardrooms, collaboration and breakout spaces, flexible memberships, and virtual offices.</p>
                </div>
                <div class="col-lg-12 text-center mt-4">
                    <div class="mb-4 mt-2">
                        <a href="#scrolled" class="btn custom-button">Take a tour</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

     <section class="container mt-5" id="scrolled">
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="#" class="image-link">
                    <img src="{{ asset('images/flexible.jpg') }}" alt="Image 1" class="img-fluid img-hover">
                </a>
                <h3 class="mt-3"><a href="#" class="link-heading">Flexible Workspaces</a></h3>
                <p>Our coworking space offers a variety of flexible workspaces, including private offices and dedicated desks.</p>
            </div>
            <div class="col-md-4 mb-4">
                <a href="#" class="image-link">
                    <img src="{{ asset('images/desks.jpg') }}" alt="Image 2" class="img-fluid img-hover">
                </a>
                <h3 class="mt-3"><a href="#" class="link-heading">Collaboration Zones</a></h3>
                <p>Experience collaborative work environments with breakout spaces and meeting rooms.</p>
            </div>
            <div class="col-md-4 mb-4">
                <a href="#" class="image-link">
                    <img src="{{ asset('images/virtu.jpg') }}" alt="Image 3" class="img-fluid img-hover">
                </a>
                <h3 class="mt-3"><a href="#" class="link-heading">Virtual Offices</a></h3>
                <p>Get the benefits of a physical office address with our virtual office solutions.</p>
            </div>
        </div>
    </section>
    <section class="container mt-5" style="background-color: #f0e9ea; padding: 40px; border-radius: 15px; text-align: center;">
        <h2 style="font-size: 24px; color: #333;">Why Choose Colabra?</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="feature text-center">
                    <h3 style="font-size: 18px; color: #333; margin-top: 20px;">Flexibility</h3>
                    <img src="icon1.png" alt="Flexibility Icon" style="width: 50px; height: 50px;">
                    <p style="font-size: 14px; color: #555;">
                        Need a bigger space? We offer expansion clauses, allowing you to move to a bigger space during your membership term.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature text-center">
                    <h3 style="font-size: 18px; color: #333; margin-top: 20px;">Luxury</h3>
                    <img src="icon2.png" alt="Luxury Icon" style="width: 50px; height: 50px;">
                    <p style="font-size: 14px; color: #555;">
                        Kings Club is designed by world-class designers and is complete with high-end amenities and custom finishes.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature text-center">
                    <h3 style="font-size: 18px; color: #333; margin-top: 20px;">Community</h3>
                    <img src="icon3.png" alt="Community Icon" style="width: 50px; height: 50px;">
                    <p style="font-size: 14px; color: #555;">
                        Meet, connect, and grow with your Kings Club community through regular networking and lunch-and-learn events.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature text-center">
                    <h3 style="font-size: 18px; color: #333; margin-top: 20px;">Support</h3>
                    <img src="icon4.png" alt="Support Icon" style="width: 50px; height: 50px;">
                    <p style="font-size: 14px; color: #555;">
                        We offer unparalleled business support, from phone answering to administration assistance.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/home-side.png')}}" alt="Workspace Image 1" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p style="font-size: 16px; color: #333;">
                    Thoughtfully designed workspaces for individuals and teams, complemented by state-of-the-art amenities. Surrounded by the equivalent of six tennis courts worth of onsite gardens, it boasts a private gymnasium, community events, a golf simulator, a BBQ pavilion, 4-hole putting green, a relaxation room, an onsite carpark, and much more. Colabra is the ultimate working address.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <button class="btn btn-primary btn-lg rounded-pill" style="border-color: black; background-color: transparent; color: black;">
                    Membership Plans <span>&rarr;</span>
                </button>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/garden.jpg')}}" alt="Workspace Image 2" class="img-fluid">
            </div>
        </div>
    </section>

 












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

    <script>
        // Smooth scrolling for anchor links
        $('a.scroll').click(function(event) {
            event.preventDefault();
            var target = $($(this).attr('href'));
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000); // Adjust the animation speed if needed
            }
        });
    </script>

</body>

</html>