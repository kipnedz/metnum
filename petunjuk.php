<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Petunjuk Penggunaan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <style>
    /* Mengatur latar belakang gambar agar mengisi seluruh halaman */
    body,
    html {
        height: 100%;
        margin: 0;
    }

    /* Menambahkan latar belakang gambar pada seluruh halaman */
    .full-background {
        background-image: url("img/bg1.jpg");
        /* Ganti dengan path gambar latar belakang */
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    /* Menambahkan efek blur pada latar belakang */
    .blurred-background {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        /* Menambahkan overlay hitam semi-transparan */
        backdrop-filter: blur(8px);
        /* Efek blur pada latar belakang */
        z-index: 1;
    }

    .content {
        padding: 30px;
        text-align: center;
        color: white;
        z-index: 2;
        /* Memastikan teks berada di atas layer blur */
        margin-top: 90px;
        /* Menambahkan margin untuk mengatur posisi konten lebih tinggi */
    }

    /* Memperjelas tulisan */
    .content h2 {
        font-size: 3rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }

    .content p {
        font-size: 1.5rem;
        line-height: 1.8;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
    }

    /* Navbar */
    header {
        z-index: 10;
    }

    /* Styling untuk navbar */
    .navbar-custom {
        background-color: white;
        padding: 10px;
    }

    .navbar-custom .nav-link {
        color: #000;
    }

    .navbar-custom .nav-link:hover {
        color: #ff5722;
    }

    .navbar-custom .btn-outline-danger {
        border-color: #ff5722;
    }

    .navbar-custom .btn-outline-danger:hover {
        background-color: #ff5722;
        color: white;
    }

    .navbar-custom .btn-outline-success {
        border-color: #4caf50;
    }

    .navbar-custom .btn-outline-success:hover {
        background-color: #4caf50;
        color: white;
    }

    .navbar-custom .btn-outline-primary {
        border-color: #007bff;
    }

    .navbar-custom .btn-outline-primary:hover {
        background-color: #007bff;
        color: white;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom navbar-custom">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="img/bunga1-removebg-preview.png" class="bi me-2" width="40" height="32" />
                <span class="fs-4">Bucket Bunga</span>
            </div>

            <ul class="nav nav-pills">

                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link"><button type="button"
                            class="btn btn-outline-primary">Home</button></a>
                </li>
            </ul>
        </header>
    </div>
    <!-- End Header -->

    <!-- Content Section with Full Background -->
    <div class="full-background">
        <!-- Efek blur pada latar belakang -->
        <div class="blurred-background"></div>

        <div class="content">
            <h2>Petunjuk Penggunaan</h2>
            <p>Berikut adalah panduan untuk menggunakan fitur perhitungan bahan buket bunga:</p>
            <ul class="list-unstyled">
                <li><strong>Langkah 1:</strong> Masukkan jumlah buket yang ingin Anda pesan (Mawar Merah, Krisan, Mawar
                    Putih, dan Sunflower).</li>
                <li><strong>Langkah 2:</strong> Klik tombol "Hitung Bahan" setelah mengisi form.</li>
                <li><strong>Langkah 3:</strong> Hasil perhitungan bahan akan muncul di bawah form.</li>
                <li><strong>Langkah 4:</strong> Gunakan hasil perhitungan ini untuk mempersiapkan bahan-bahan buket
                    bunga.</li>
            </ul>
        </div>
    </div>
    <!-- End Content Section -->

    <!-- Footer -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>