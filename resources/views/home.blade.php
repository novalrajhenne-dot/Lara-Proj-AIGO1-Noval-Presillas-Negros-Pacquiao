
@extends('layouts.app')

@section('title', 'Home | SILONG Café')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<!-- HERO SECTION / IMAGE SLIDER -->
<section class="hero">
    <div class="hero-slider">

        <div class="hero-slide active"
             style="background-image: url('https://images.unsplash.com/photo-1442512595331-e89e73853f31?auto=format&fit=crop&w=2000&q=85');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <p class="hero-subtitle">YOUR NEIGHBORHOOD CAFÉ</p>
                <h1>A little space<br>to feel at home.</h1>
                <p>
                    Good coffee, comforting food, and a place
                    where you can simply be yourself.
                </p>
                <a href="{{ route('menu') }}" class="hero-button">
                    Explore Our Menu
                </a>
            </div>
        </div>

        <div class="hero-slide"
             style="background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=2000&q=85');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <p class="hero-subtitle">SLOW DOWN AND STAY A WHILE</p>
                <h1>Find comfort<br>in every cup.</h1>
                <p>
                    Take a break from your busy day and enjoy
                    the little things with us.
                </p>
                <a href="{{ route('about') }}" class="hero-button">
                    Get to Know Us
                </a>
            </div>
        </div>

        <div class="hero-slide"
             style="background-image: url('https://images.unsplash.com/photo-1445116572660-236099ec97a0?auto=format&fit=crop&w=2000&q=85');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <p class="hero-subtitle">MADE FOR EVERY MOMENT</p>
                <h1>Your place,<br>your own pace.</h1>
                <p>
                    Whether you're studying, catching up,
                    or relaxing, there's room for you here.
                </p>
                <a href="{{ route('space') }}" class="hero-button">
                    Discover Our Space
                </a>
            </div>
        </div>

    </div>

    <!-- SLIDER CONTROLS -->
    <div class="slider-controls">
        <button id="prevSlide" aria-label="Previous slide">&#10094;</button>
        <div class="slider-dots">
            <button class="dot active" data-slide="0" aria-label="Slide 1"></button>
            <button class="dot" data-slide="1" aria-label="Slide 2"></button>
            <button class="dot" data-slide="2" aria-label="Slide 3"></button>
        </div>
        <button id="nextSlide" aria-label="Next slide">&#10095;</button>
    </div>
</section>

<!-- INTRODUCTION SECTION -->
<section class="intro-section">
    <div class="intro-image">
        <img
            src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?auto=format&fit=crop&w=1000&q=85"
            alt="Warm and welcoming café interior">
    </div>

    <div class="intro-content">
        <p class="section-label">WELCOME TO SILONG</p>
        <h2>More than just<br>a cup of coffee.</h2>
        <p>
            SILONG is a neighborhood café inspired by the comfort
            of home. We bring together good coffee, familiar flavors,
            and a welcoming atmosphere where people can slow down
            and enjoy their moments.
        </p>
        <a href="{{ route('about') }}" class="text-link">
            Learn More About Us →
        </a>
    </div>
</section>

<!-- MEANING OF SILONG -->
<section class="meaning-section">
    <div class="meaning-content">
        <p class="section-label">THE MEANING BEHIND OUR NAME</p>
        <h2>A place to find shelter, comfort, and connection.</h2>
        <p>
            The word "Silong" brings to mind a sheltered space
            where people can pause, rest, and feel at ease.
            That is the feeling we want to share with everyone
            who walks through our doors.
        </p>
    </div>
</section>

<!-- FEATURED MENU -->
<section class="featured-section">
    <div class="section-heading">
        <p class="section-label">A TASTE OF SILONG</p>
        <h2>Made to be enjoyed.</h2>
        <p>Discover some of the comforting favorites waiting for you.</p>
    </div>

    <div class="featured-grid">

        <div class="featured-card">
            <img
                src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=85"
                alt="Freshly prepared coffee">
            <div class="featured-info">
                <h3>Signature Coffee</h3>
                <p>Freshly brewed coffee for your everyday comfort.</p>
            </div>
        </div>

        <div class="featured-card">
            <img
                src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=85"
                alt="Chocolate cake dessert">
            <div class="featured-info">
                <h3>Sweet Treats</h3>
                <p>A little sweetness to make your day better.</p>
            </div>
        </div>

        <div class="featured-card">
            <img
                src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=800&q=85"
                alt="Freshly baked pastry">
            <div class="featured-info">
                <h3>Fresh Pastries</h3>
                <p>Delicious bites made for your coffee moments.</p>
            </div>
        </div>

    </div>

    <a href="{{ route('menu') }}" class="section-button">
        View Full Menu
    </a>
</section>

<!-- ATMOSPHERE SECTION -->
<section class="atmosphere-section">
    <div class="atmosphere-content">
        <p class="section-label">YOUR LITTLE ESCAPE</p>
        <h2>Come as you are.<br>Stay as long as you like.</h2>
        <p>
            From quiet study sessions to conversations with
            friends, SILONG is a space for every kind of moment.
            Find your corner, settle in, and make yourself at home.
        </p>
        <a href="{{ route('space') }}" class="hero-button">
            Explore Our Space
        </a>
    </div>

    <div class="atmosphere-image">
        <img
            src="https://images.unsplash.com/photo-1442975631115-c4f7b05b8a2a?auto=format&fit=crop&w=1200&q=85"
            alt="Cozy café seating area">
    </div>
</section>

<!-- CLOSING CALL TO ACTION -->
<section class="closing-section">
    <p class="section-label">WE SAVED YOU A SEAT</p>
    <h2>Make yourself at home.</h2>
    <p>
        Your next favorite coffee moment might just be here.
        We look forward to welcoming you.
    </p>
    <a href="{{ route('contact') }}" class="hero-button">
        Get in Touch
    </a>
</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
