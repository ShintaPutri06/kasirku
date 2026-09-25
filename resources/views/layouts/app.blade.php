<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') &middot; {{ config('app.name', 'KasirKu') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: #f2e8cf;
        color: #386641;
    }

    .navbar-brand {
        font-weight: 700;
        letter-spacing: .5px;
        color: #f2e8cf;
    }

    .card {
        border: 1px solid rgba(56, 102, 65, .12);
        box-shadow: 0 4px 14px rgba(56, 102, 65, .08);
        background: #fffaf0;
        border-radius: 12px;
    }

    .table th {
        white-space: nowrap;
        background: #6a994e;
        color: #f2e8cf;
    }

    .table td {
        color: #386641;
    }

    .harga {
        font-variant-numeric: tabular-nums;
        color: #60bc47;
        font-weight: 600;
    }

    .btn-primary {
        background: #6a994e;
        border-color: #6a994e;
    }

    .btn-primary:hover {
        background: #386641;
        border-color: #386641;
    }

    .btn-success {
        background: #a7c957;
        border-color: #a7c957;
        color: #386641;
    }

    .btn-danger {
        background: #babc47;
        border-color: #66bc47;
    }

    .navbar {
        background: #386641 !important;
    }
</style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">&#128179; Merrie Lily</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home', 'produk.*') ? 'active' : '' }}"
                       href="{{ route('produk.index') }}">Daftar Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaksi.create') ? 'active' : '' }}"
                       href="{{ route('transaksi.create') }}">Transaksi Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaksi.index', 'transaksi.show') ? 'active' : '' }}"
                       href="{{ route('transaksi.index') }}">Riwayat Transaksi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container pb-5">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif


    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
