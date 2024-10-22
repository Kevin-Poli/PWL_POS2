<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Toko Makmur Abadi</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Tambahkan background image di body */
        body {
            background-image: url('https://e1.pxfuel.com/desktop-wallpaper/586/789/desktop-wallpaper-dark-green-backgrounds-plain-dark-green-vsvklm-dark-backgrounds-plane.jpg');
            background-size: cover;
            background-position: center;
        }

        /* Tambahkan background image di jumbotron */
        .jumbotron {
            background-image: url('https://img.lovepik.com/bg/20231220/Empty-Captivating-Photograph-of-an-Empty-Grocery-Store_2658107_wh860.jpg!/fw/860');
            background-size: cover;
            background-position: center;
            color: white; /* Pastikan teks tetap terlihat */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Toko Makmur Abadi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('register')}}">Daftar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <!-- Tempat gambar di jumbotron -->
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXs0YiREzgkMr5nk6KR9CxbZms9L-heNmUfA&s" alt="Banner" class="img-fluid mb-4" style="max-width: 100%; height: auto;">
            <h1 class="display-4">Selamat Datang di Toko Makmur Abadi</h1>
            <p class="lead">Sistem POS untuk mengelola penjualan dan inventaris Anda.</p>
            <hr class="my-4">
            <p>Temukan produk-produk terbaru kami!</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Mulai Belanja</a>
            </p>
        </div>
    </div>

    <!-- Lokasi Toko -->
    <div class="container">
        <h2 class="mt-5">Lokasi Toko</h2>
        <div id="map" style="height: 400px; width: 100%;">
        <img src="https://www.independent-software.com/assets/gmap/gmap-tutorial-first-map.jpg" alt="Produk 1" class="card-img-top">
        </div>
    </div>

    <!-- Produk Terbaru -->
    <div class="container">
        <h2 class="mt-5">Produk Terbaru</h2>
        <div class="row">
            <!-- Ubah sumber gambar produk -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2021/08/02/polytron-pld-32tv1855.png?w=1248" alt="Produk 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">TV Home Theater</h5>
                        <p class="card-text">TV Home Theater menghadirkan kualitas gambar tajam dan suara surround imersif. Cocok untuk pengalaman menonton yang lebih hidup di rumah</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Lihat</button>
                            </div>
                            <small class="text-muted">Rp 100.000</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/12/2/50771819-b6a6-44a5-9bdd-1cbeaed21aa7.jpg" alt="Produk 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Lampu Bohlam LED Smart Wifi</h5>
                        <p class="card-text">Lampu Bohlam LED Smart Wifi dapat dikontrol melalui aplikasi smartphone. Hemat energi dan mudah diatur dengan berbagai pilihan warna dan kecerahan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Lihat</button>
                            </div>
                            <small class="text-muted">Rp 200.000</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://upload.jaknot.com/2022/11/images/products/703490/original/yilai-kursi-kantor-office-chair-adjustable-height-cf-032.jpg" alt="Produk 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Kursi Kerja Kantor</h5>
                        <p class="card-text">Kursi Kerja Kantor dirancang ergonomis untuk kenyamanan saat bekerja lama. Dilengkapi dengan penyesuaian tinggi dan sandaran yang mendukung postur tubuh</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Lihat</button>
                            </div>
                            <small class="text-muted">Rp 300.000</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Toko Makmur Abadi &copy; 2023</span>
        </div>
    </footer>

    <!-- Link Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk Google Maps -->
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -6.17511, lng: 106.86503 },
                zoom: 15
            });
        }
    </script>
   
</body>
</html>
