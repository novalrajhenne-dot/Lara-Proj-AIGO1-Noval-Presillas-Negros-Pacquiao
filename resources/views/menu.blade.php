
@extends('layouts.app')

@section('title', 'Our Menu | SILONG Café')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endpush

@section('content')

<section class="menu-hero">
    <div class="menu-hero-content">
        <p class="menu-eyebrow">MADE WITH COMFORT IN MIND</p>
        <h1>A Taste of <span>Home.</span></h1>
        <p>
            Discover comforting drinks, Filipino favorites,
            and freshly prepared treats made to make you feel at home.
        </p>
    </div>
</section>

<section class="menu-section">

    <div class="menu-heading">
        <p class="menu-eyebrow">EXPLORE OUR SELECTION</p>
        <h2>Our Menu</h2>
        <p>
            Something delicious is waiting for you.
            Find your new favorite at SILONG.
        </p>
    </div>

    <div class="menu-filters">
        <button class="menu-filter active" data-filter="all">All</button>
        <button class="menu-filter" data-filter="coffee">Coffee</button>
        <button class="menu-filter" data-filter="non-coffee">Non-Coffee</button>
        <button class="menu-filter" data-filter="filipino">Filipino Favorites</button>
        <button class="menu-filter" data-filter="pastries">Pastries and Desserts</button>
        <button class="menu-filter" data-filter="food">Food and Light Meals</button>
    </div>

    <div class="menu-grid">

        <!-- COFFEE -->
        <article class="menu-card" data-category="coffee">
            <img src="{{ asset('images/menu/americano.jpg') }}" alt="Freshly brewed Americano">
            <div class="menu-card-content">
                <span class="menu-category">Coffee</span>
                <h3>Americano</h3>
                <p>Rich espresso balanced with fresh water.</p>
                <span class="menu-price">₱95</span>
            </div>
        </article>

        <article class="menu-card" data-category="coffee">
            <img src="{{ asset('images/menu/spanish-latte.jpg') }}" alt="Spanish latte">
            <div class="menu-card-content">
                <span class="menu-category">Coffee</span>
                <h3>Spanish Latte</h3>
                <p>A smooth espresso with creamy sweet milk.</p>
                <span class="menu-price">₱130</span>
            </div>
        </article>

        <article class="menu-card" data-category="coffee">
            <img src="{{ asset('images/menu/caramel-latte.jpg') }}" alt="Caramel latte">
            <div class="menu-card-content">
                <span class="menu-category">Coffee</span>
                <h3>Caramel Latte</h3>
                <p>Espresso and milk with a touch of caramel.</p>
                <span class="menu-price">₱135</span>
            </div>
        </article>

        <!-- NON-COFFEE -->
        <article class="menu-card" data-category="non-coffee">
            <img src="{{ asset('images/menu/matcha-latte.jpg') }}" alt="Iced matcha latte">
            <div class="menu-card-content">
                <span class="menu-category">Non-Coffee</span>
                <h3>Matcha Latte</h3>
                <p>Earthy matcha blended with creamy milk.</p>
                <span class="menu-price">₱130</span>
            </div>
        </article>

        <article class="menu-card" data-category="non-coffee">
            <img src="{{ asset('images/menu/iced-chocolate.jpg') }}" alt="Iced chocolate drink">
            <div class="menu-card-content">
                <span class="menu-category">Non-Coffee</span>
                <h3>Iced Chocolate</h3>
                <p>A refreshing chocolate drink for sweet moments.</p>
                <span class="menu-price">₱115</span>
            </div>
        </article>

        <!-- FILIPINO FAVORITES -->
        <article class="menu-card" data-category="filipino">
            <img src="{{ asset('images/menu/sikwate.jpg') }}" alt="Traditional Filipino sikwate">
            <div class="menu-card-content">
                <span class="menu-category">Filipino Favorites</span>
                <h3>Sikwate</h3>
                <p>Traditional Filipino hot chocolate made with tablea.</p>
                <span class="menu-price">₱110</span>
            </div>
        </article>

        <article class="menu-card" data-category="filipino">
            <img src="{{ asset('images/menu/iced-sikwate.jpg') }}" alt="Iced Filipino sikwate">
            <div class="menu-card-content">
                <span class="menu-category">Filipino Favorites</span>
                <h3>Iced Sikwate</h3>
                <p>A chilled and creamy version of Filipino tablea chocolate.</p>
                <span class="menu-price">₱120</span>
            </div>
        </article>

        <!-- PASTRIES AND DESSERTS -->
        <article class="menu-card" data-category="pastries">
            <img src="{{ asset('images/menu/croissant.jpg') }}" alt="Fresh butter croissant">
            <div class="menu-card-content">
                <span class="menu-category">Pastries and Desserts</span>
                <h3>Butter Croissant</h3>
                <p>A flaky and buttery pastry perfect for coffee.</p>
                <span class="menu-price">₱85</span>
            </div>
        </article>

        <article class="menu-card" data-category="pastries">
            <img src="{{ asset('images/menu/brownie.jpg') }}" alt="Chocolate brownie">
            <div class="menu-card-content">
                <span class="menu-category">Pastries and Desserts</span>
                <h3>Chocolate Brownie</h3>
                <p>A rich, fudgy chocolate treat.</p>
                <span class="menu-price">₱75</span>
            </div>
        </article>

        <!-- FOOD AND LIGHT MEALS -->
        <article class="menu-card" data-category="food">
            <img src="{{ asset('images/menu/club-sandwich.jpg') }}" alt="Club sandwich">
            <div class="menu-card-content">
                <span class="menu-category">Food and Light Meals</span>
                <h3>Club Sandwich</h3>
                <p>A satisfying sandwich with fresh ingredients.</p>
                <span class="menu-price">₱145</span>
            </div>
        </article>

        <article class="menu-card" data-category="food">
            <img src="{{ asset('images/menu/garlic-rice.jpg') }}" alt="Garlic rice meal">
            <div class="menu-card-content">
                <span class="menu-category">Food and Light Meals</span>
                <h3>Garlic Rice Meal</h3>
                <p>A comforting rice meal for a satisfying break.</p>
                <span class="menu-price">₱150</span>
            </div>
        </article>

    </div>

    <p class="menu-note">
        Note: All menu items and prices are proposed samples for this project.
    </p>

</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/menu.js') }}" defer></script>
@endpush
