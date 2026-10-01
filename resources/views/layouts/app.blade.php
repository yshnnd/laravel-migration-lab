<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Shared CSS file linked from public/css/style.css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Shared Navigation Bar -->
    <nav style="background: #2b6cb0; padding: 15px;">
        <a href="{{ url('/') }}" style="color: white; margin-right: 15px; text-decoration: none;">Home</a>
        <a href="{{ url('/about') }}" style="color: white; margin-right: 15px; text-decoration: none;">About</a>
        <a href="{{ url('/contact') }}" style="color: white; text-decoration: none;">Contact</a>
    </nav>

    <!-- Dynamic Content Area -->
    <main style="padding: 30px;">
        @yield('content')
    </main>

    <!-- Shared Footer -->
    <footer style="background: #edf2f7; padding: 15px; text-align: center; margin-top: 40px;">
        <p>&copy; {{ date('Y') }} Student Portal. All rights reserved.</p>
    </footer>

</body>
</html>