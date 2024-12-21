<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body {
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .team-section {
        padding: 60px 20px;
        text-align: center;
    }

    .team-section h2 {
        font-size: 2.5rem;
        margin-bottom: 30px;
        font-weight: bold;
        color: #333;
    }

    .team {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .team-member {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 250px;
        text-align: center;
        padding: 20px;
        transition: transform 0.3s ease;
    }

    .team-member:hover {
        transform: scale(1.05);
    }

    .team-member img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .team-member h3 {
        font-size: 1.25rem;
        margin-bottom: 10px;
        color: #333;
    }

    .team-member p {
        font-size: 0.9rem;
        color: #777;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="img/bunga1-removebg-preview.png" class="bi me-2" width="40" height="32" />
                <span class="fs-4">Bucket Bunga</span>
            </div>

            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link"><button type="button" class="btn btn-outline-danger">
                            Home
                        </button></a>
                </li>
            </ul>
        </header>
    </div>

    <!-- About Section -->
    <div class="team-section">
        <h2>Meet Our Team</h2>
        <div class="team">
            <!-- Student 1 -->
            <div class="team-member">
                <img src="img/student1.jpg" alt="Student 1">
                <h3>Mahasiswa 1</h3>
                <p>Deskripsi singkat tentang Mahasiswa 1.</p>
            </div>
            <!-- Student 2 -->
            <div class="team-member">
                <img src="img/student2.jpg" alt="Student 2">
                <h3>Mahasiswa 2</h3>
                <p>Deskripsi singkat tentang Mahasiswa 2.</p>
            </div>
            <!-- Student 3 -->
            <div class="team-member">
                <img src="img/student3.jpg" alt="Student 3">
                <h3>Mahasiswa 3</h3>
                <p>Deskripsi singkat tentang Mahasiswa 3.</p>
            </div>
            <!-- Student 4 -->
            <div class="team-member">
                <img src="img/student4.jpg" alt="Student 4">
                <h3>Mahasiswa 4</h3>
                <p>Deskripsi singkat tentang Mahasiswa 4.</p>
            </div>
            <!-- Dosen -->
            <div class="team-member">
                <img src="img/dosen.jpg" alt="Dosen">
                <h3>Dosen Pengampu</h3>
                <p>Deskripsi singkat tentang Dosen Pengampu.</p>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>