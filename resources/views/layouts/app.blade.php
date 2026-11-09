<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Aptoro Nirigi</title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="navbar">
        <div class="container nav-content">

            <a href="{{ route('home') }}" class="logo">
                APTO<span>RO.</span>
            </a>

            <ul class="nav-links">
                <li><a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>

                <li><a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>

                <li><a href="{{ route('skills') }}"
                    class="{{ request()->routeIs('skills') ? 'active' : '' }}">Skills</a></li>

                <li><a href="{{ route('projects') }}"
                    class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>

                <li><a href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>

                <li><a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
            </ul>

        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© {{ date('Y') }} Aptoro Nirigi.
        All Rights Reserved.</p>
    </footer>

</body>
</html>
