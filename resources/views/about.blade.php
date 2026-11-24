
@extends('layouts.app')

@section('content')

<main class="about-page">

    <!-- 1. ABOUT SILONG / HERO SECTION -->
    <section class="about-hero">

        <div class="about-hero-content">

            <p class="about-eyebrow">WELCOME TO SILONG</p>

            <h1>
                More than coffee.
                <span>A place to belong.</span>
            </h1>

            <p>
                A little space to pause, connect, and feel at home.
                Discover the story behind our neighborhood café.
            </p>

            <a href="#our-story" class="about-button">
                Discover Our Story
            </a>

        </div>

        <div class="about-hero-image">
            <img
                src="{{ asset('images/about/about-hero.jpg') }}"
                alt="Cozy SILONG cafe interior"
            >
        </div>

    </section>


    <!-- 2. BRAND STORY -->
    <section class="about-intro" id="our-story">

        <p class="about-eyebrow">OUR STORY</p>

        <h2>
            A little space to feel
            <span>at home.</span>
        </h2>

        <p>
            SILONG was imagined as a neighborhood café where
            people can take a break from their busy routines
            and enjoy simple but meaningful moments.
        </p>

        <p>
            Inspired by Filipino hospitality, our café brings
            together the warmth of home, comforting food,
            freshly prepared drinks, and genuine connections.
        </p>

        <div id="moreContent" hidden>

            <p>
                We believe that a café should be more than a
                place to purchase coffee. It should be a welcoming
                space where students can study, friends can catch
                up, families can share meals, and individuals
                can enjoy a peaceful moment for themselves.
            </p>

            <p>
                Through SILONG, we hope to create an environment
                where every cup, every conversation, and every
                visit becomes part of a meaningful experience.
            </p>

        </div>

        <button
            type="button"
            id="readMoreBtn"
            class="about-button read-more-btn"
            aria-expanded="false"
            aria-controls="moreContent"
        >
            Read More
        </button>

    </section>


    <!-- 3. MEANING BEHIND THE NAME -->
    <section class="about-meaning">

        <div class="meaning-image">
            <img
                src="{{ asset('images/about/silong-space.jpg') }}"
                alt="Warm and welcoming cafe space"
            >
        </div>

        <div class="meaning-content">

            <p class="about-eyebrow">THE MEANING BEHIND OUR NAME</p>

            <h2>Why <span>SILONG?</span></h2>

            <p>
                SILONG is a Filipino and Bisaya word associated
                with the sheltered space underneath a house
                or structure.
            </p>

            <p>
                Traditionally, it represents a place of shelter,
                protection, and comfort. We chose this name
                because it reflects what we want our café to be:
                a safe, welcoming, and peaceful space for everyone.
            </p>

            <p>
                Just like a silong provides shelter, our café
                hopes to offer a little comfort from the
                busyness of everyday life.
            </p>

        </div>

    </section>


    <!-- 4. MISSION AND VISION -->
    <section class="about-mission-vision">

        <div class="mission-vision-heading">

            <p class="about-eyebrow">OUR PURPOSE AND DIRECTION</p>

            <h2>What We Believe In</h2>

        </div>

        <div class="mission-vision-container">

            <article class="mission-card">

                <span class="mission-number">01</span>

                <h3>Our Mission</h3>

                <p>
                    To provide a welcoming and comfortable café
                    experience through quality food and beverages,
                    genuine Filipino hospitality, and a peaceful
                    environment where people can connect, relax,
                    and create meaningful memories.
                </p>

            </article>

            <article class="mission-card">

                <span class="mission-number">02</span>

                <h3>Our Vision</h3>

                <p>
                    To become a beloved neighborhood café known
                    for warmth, authenticity, and community,
                    creating a space where everyone feels valued,
                    welcomed, and at home.
                </p>

            </article>

        </div>

    </section>


    <!-- 5. CORE VALUES -->
    <section class="about-values">

        <div class="values-heading">

            <p class="about-eyebrow">WHAT GUIDES US</p>

            <h2>Our Core Values</h2>

            <p>
                These values shape every experience we create
                and every connection we build.
            </p>

        </div>

        <div class="values-container">

            <article class="value-card">
                <span>01</span>
                <h3>Comfort</h3>
                <p>
                    Creating a peaceful environment where
                    everyone can feel relaxed and at home.
                </p>
            </article>

            <article class="value-card">
                <span>02</span>
                <h3>Hospitality</h3>
                <p>
                    Treating every guest with kindness,
                    warmth, and genuine care.
                </p>
            </article>

            <article class="value-card">
                <span>03</span>
                <h3>Community</h3>
                <p>
                    Encouraging meaningful relationships
                    and bringing people together.
                </p>
            </article>

            <article class="value-card">
                <span>04</span>
                <h3>Authenticity</h3>
                <p>
                    Celebrating Filipino culture, traditions,
                    and genuine experiences.
                </p>
            </article>

            <article class="value-card">
                <span>05</span>
                <h3>Quality</h3>
                <p>
                    Providing thoughtfully prepared food
                    and beverages with attention to detail.
                </p>
            </article>

        </div>

    </section>


    <!-- 6. CAFE PHILOSOPHY -->
    <section class="about-philosophy">

        <div class="philosophy-image">
            <img
                src="{{ asset('images/about/cafe-philosophy.jpg') }}"
                alt="Coffee and pastries prepared at SILONG"
            >
        </div>

        <div class="philosophy-content">

            <p class="about-eyebrow">OUR CAFE PHILOSOPHY</p>

            <h2>
                It's not just about
                <span>what's in your cup.</span>
            </h2>

            <p>
                At SILONG, we believe that the best café
                experiences are built around more than
                food and beverages.
            </p>

            <p>
                They are about the conversations shared,
                the friendships formed, the quiet moments
                enjoyed, and the memories created along the way.
            </p>

            <p>
                Every visit is an opportunity to slow down,
                appreciate the little things, and feel connected.
            </p>

        </div>

    </section>


    <!-- 7. TEAM / STAFF SECTION -->
    <section class="about-team">

        <div class="team-heading">

            <p class="about-eyebrow">THE PEOPLE BEHIND SILONG</p>

            <h2>Meet Our Team</h2>

            <p>
                The people who bring warmth, care, and
                hospitality into every SILONG experience.
            </p>

        </div>

        <div class="team-container">

            <article class="team-card">

                <img
                    src="{{ asset('images/about/team-1.jpg') }}"
                    alt="Cafe manager profile"
                >

                <div class="team-info">
                    <h3>Andrea Santos</h3>
                    <p class="team-role">Café Manager</p>
                    <p>
                        Ensures that every guest experiences
                        the warmth and welcoming atmosphere
                        of SILONG.
                    </p>
                </div>

            </article>


            <article class="team-card">

                <img
                    src="{{ asset('images/about/team-2.jpg') }}"
                    alt="Head barista profile"
                >

                <div class="team-info">
                    <h3>Marco Reyes</h3>
                    <p class="team-role">Head Barista</p>
                    <p>
                        Passionate about preparing quality
                        coffee and creating memorable
                        café experiences.
                    </p>
                </div>

            </article>


            <article class="team-card">

                <img
                    src="{{ asset('images/about/team-3.jpg') }}"
                    alt="Cafe service staff profile"
                >

                <div class="team-info">
                    <h3>Sofia Garcia</h3>
                    <p class="team-role">Service Associate</p>
                    <p>
                        Welcomes guests with genuine kindness
                        and makes every visit feel special.
                    </p>
                </div>

            </article>

        </div>

        <p class="team-disclaimer">
            *The staff names and profiles above are fictional
            representations for this academic project.
        </p>

    </section>


    <!-- 8. CLOSING SECTION -->
    <section class="about-closing">

        <p class="about-eyebrow">A SPACE FOR EVERYONE</p>

        <h2>
            Find your little
            <span>space at SILONG.</span>
        </h2>

        <p>
            Good coffee, warm company, and a place
            that always feels like home.
        </p>

        <a href="{{ route('menu') }}" class="about-button">
            Explore Our Menu
        </a>

    </section>

</main>

@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush


@push('scripts')
<script src="{{ asset('js/about.js') }}" defer></script>
@endpush