<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Sekolah - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/style/app.css') }}">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="brand">
                <h1><a href="/">Aplikasi Web Sekolah</a></h1>
            </div>
            <nav>
                <a href="/" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <span class="material-icons">home</span>
                    Beranda
                </a>
                <a href="/teacher" class="nav-item {{ request()->routeIs('listteacher') ? 'active' : '' }}">
                    <span class="material-icons">school</span>
                    Daftar Guru
                </a>
                <a href="/dashboard" class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <span class="material-icons">dashboard</span>
                    Dashboard
                </a>
                <a href="/about" class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <span class="material-icons">info</span>
                    Tentang Kami
                </a>
            </nav>
        </div>
    </header>

    <main>

        @yield('content')

    </main>

    <footer>
        <p>&copy; 2025 SMK PLUS PELITA NUSANTARA. Hak Cipta Dilindungi.</p>
    </footer>

</body>

</html>
