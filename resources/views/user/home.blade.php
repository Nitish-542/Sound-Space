@extends('layouts.user')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Welcome to Sound&Space</h1>
    <p class="text-center">Your ultimate destination for top-quality musical instruments and accessories.</p>

    <!-- Hero Section -->
    <section class="hero-section mt-5">
        <div class="text-center">      
            <h2>Elevate Your Sound</h2>
            <p>Explore our curated selection of instruments, perfect for beginners and professionals alike.</p>
            <a href="#featured" class="btn btn-primary ">Shop Now</a>
        </div>
    </section>  

    <!-- Featured Instruments Section -->
    <section id="featured" class="featured-instruments mt-5">
        <h2 class="text-center">Featured Instruments</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Acoustic Guitar</h5>
                        <p class="card-text">A timeless classic, perfect for any music enthusiast.</p>
                        <a href="/user/instruments" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Electric Violin</h5>
                        <p class="card-text">Modern sound with traditional elegance. Ideal for stage performances.</p>
                        <a href="/user/instruments" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Digital Piano</h5>
                        <p class="card-text">A versatile instrument for all levels, with a rich, full sound.</p>
                        <a href="/user/instruments" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials mt-5">
        <h2 class="text-center">What Our Customers Say</h2>
        <div class="row">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p>"Musically is my go-to store for all my musical needs. The variety and quality are unmatched."</p>
                    <footer class="blockquote-footer">John Doe, Professional Guitarist</footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p>"From beginner instruments to professional gear, Musically has it all. Highly recommended!"</p>
                    <footer class="blockquote-footer">Jane Smith, Music Teacher</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="latest-news mt-5 news">
        <h2 class="text-center">Latest News</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Arrivals!</h5>
                        <p class="card-text">Check out our latest instruments, just arrived and ready to play.</p>
                        <a href="/contact" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming Events</h5>
                        <p class="card-text">Join our music workshops and events to enhance your skills.</p>
                        <a href="/contact" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special Discounts</h5>
                        <p class="card-text">Don't miss our exclusive discounts on selected instruments this week!</p>
                        <a href="/contact" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
