<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portal Resep Masakan')</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <style>
        body { background: #fff8f0; }
        .navbar-brand { font-weight: 700; letter-spacing: .3px; }
        .recipe-card { transition: transform .15s ease, box-shadow .15s ease; }
        .recipe-card:hover { transform: translateY(-4px); box-shadow: 0 .6rem 1.2rem rgba(0,0,0,.12); }
        .recipe-card img { height: 190px; object-fit: cover; }
        .hero { background: linear-gradient(135deg, #d9662a, #8a2f12); }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#8a2f12;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">🍲 Portal Resep Masakan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                    aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('recipes.*') ? 'active' : '' }}" href="{{ route('recipes.index') }}">Daftar Resep</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="py-3 mt-4 text-center text-white" style="background:#8a2f12;">
        <small>&copy; {{ date('Y') }} Portal Resep Masakan &middot; UTS Rekayasa Web &middot; Universitas Pamulang</small>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
