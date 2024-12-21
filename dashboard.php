<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu Best Seller</title>
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
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content {
        padding: 30px;
        text-align: center;
        color: white;
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

    header {
        z-index: 10;
    }
    </style>
</head>

<body>
    <!--Header-->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="img/bunga1-removebg-preview.png" class="bi me-2" width="40" height="32" />
                <span class="fs-4">Bucket Bunga</span>
            </div>

            <ul class="nav nav-pills">

                <li class="nav-item">
                    <a href="petunjuk.php" class="nav-link"><button type="button" class="btn btn-outline-danger">
                            Petunjuk
                        </button></a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link"><button type="button" class="btn btn-outline-danger">
                            About
                        </button></a>
                </li>
                <li class="nav-item">
                    <a href="perhitungan.html" class="nav-link"><button type="button" class="btn btn-outline-success">
                            Perhitungan
                        </button></a>

                </li>
                <li class="nav-item">
                    <a href="kontak.html" class="nav-link"><button type="button" class="btn btn-outline-danger">
                            Contact
                        </button></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link"><button type="button" class="btn btn-outline-primary">
                            logout
                        </button></a>
                </li>
            </ul>
        </header>
    </div>
    <!--End Header-->

    <!-- Content Section with Full Background -->
    <div class="full-background">
        <div class="content">
            <h2>Welcome to Bucket Bunga!</h2>
            <p>Explore our best-selling flower arrangements and more.</p>
        </div>
    </div>
    <!--End Content Section-->

    <!--end footers-->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>