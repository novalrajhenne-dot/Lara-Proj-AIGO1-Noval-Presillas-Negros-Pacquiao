
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SILONG Café')</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    @stack('styles')
</head>
<body>

    
    <header class="site-header">
        <nav class="navbar">
            <a href="{{ route('home') }}" class="logo">SILONG<span>.</span></a>

            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('menu') }}">Menu</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

   
    <main>
        @yield('content')
    </main>

    
    <footer class="site-footer">
        <div class="footer-content">
            <h2>SILONG<span>.</span></h2>
            <p>A little space to feel at home.</p>
            <p class="copyright">
                &copy; {{ date('Y') }} SILONG Café. All rights reserved.
            </p>
            <div class="footer-team">
    <p>Developed by:</p>
    <p>Noval | Presillas | Negros | Pacquiao</p>
</div>
        </div>
    </footer>

    @stack('scripts')

</body>
</html>
