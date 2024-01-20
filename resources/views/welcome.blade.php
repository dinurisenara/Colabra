@extends('layouts.app')

@section('content')




<div class="antialiased">
    <div class="background-image-container">
        <div class="background-image"></div>
        <div class="gradient-overlay"></div>



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

</div>

@endsection