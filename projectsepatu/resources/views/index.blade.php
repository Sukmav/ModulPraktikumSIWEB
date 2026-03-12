<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Penjualan Kursi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kursi.css') }}"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Kursi Store</a>

        <div class="collapse navbar-collapse justify-content-end">

            <button class="btn btn-outline-warning btn-sm me-2"
                data-bs-toggle="modal"
                data-bs-target="#wishlistModal"
                onclick="tampilkanwishlist()">
                ⭐ Wishlist (<span id="wishlist-count">0</span>)
            </button>

            <button id="btn-theme" class="btn btn-outline-light btn-sm">
                Mode Gelap
            </button>

            @if(session()->has('user'))

            <span class="text-while text-sm ms-3">
                {{ session('user') }}
            </span>

            <a href="{{ route('logout') }}"
                class="btn btn-outline-danger btn-sm ms-3"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            @else

            <a href="{{ route('login') }}"
                class="btn btn-outline-primary btn-sm ms-3">
                Login
            </a>
            @endif
        </div>
    </div>
</nav>

<section class="hero-section">
    <img src="{{ asset('images/kursiberanda.jpeg') }}" alt="kursi" class="kursi-image">
    <div class="hero-overlay">
        <div class="container text-center text-white">
            <h1 class="display-4 fw-bold">
                Selamat Datang di Toko Kursi Kesayangan Anda
            </h1>
            <p class="lead">
                Temukan Kursi Berkualitas untuk Kenyamanan Anda
            </p>
        </div>
    </div>
</section>

<section class="info-cards-section">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="info-card">
                    <h3 class="info-title">Total Produk</h3>
                    <p class="info-number">101</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h3 class="info-title">Stok Tersedia</h3>
                    <p class="info-number">55</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h3 class="info-title">Kategori</h3>
                    <p class="info-number">4</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="produk">
    <div class="container">
        <h3 class="mb-4">Daftar Kursi</h3>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="{{ asset('images/kursigaming.jpeg') }}" class="card-img-top" alt="Kursi Gaming">

                    <div class="card-body">
                        <h5 class="card-title">Kursi Gaming</h5>
                        <p class="card-text harga-text">Harga: Rp. 1.500.000</p>
                        <p class="card-text stok-text">Stok: 10</p>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-detail w-50 me-2">
                                Beli
                            </button>

                            <button class="btn btn-outline-danger btn-wishlist w-50">
                                ❤️ Wishlist
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="modal fade" id="wishlistModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Daftar Wishlist Saya</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <ul class="list-group" id="daftar-wishlist">
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Tutup
                </button>

                <button type="button"
                    class="btn btn-danger"
                    onclick="hapusWishlist()">
                    Kosongkan
                </button>
            </div>

        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3">
    &copy; 2026 Sistem Penjualan Kursi
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>