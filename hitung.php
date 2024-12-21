<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Buket Bunga</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
    /* Styling untuk latar belakang */
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .full-background {
        background-image: url('img/latar-belakang.jpg');
        /* Ganti dengan path gambar yang sesuai */
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        height: 100%;
        width: 100%;
        position: relative;
    }

    .content {
        padding: 50px 0;
        color: white;
        text-align: center;
    }

    .container {
        background-color: rgba(0, 0, 0, 0.5);
        /* Untuk memberi kontras agar form lebih mudah dibaca */
        padding: 30px;
        border-radius: 10px;
    }

    .result {
        margin-top: 20px;
        font-size: 18px;
        color: white;
    }

    .result table {
        width: 100%;
        color: white;
        margin-top: 10px;
    }

    .result th,
    .result td {
        padding: 8px;
        text-align: left;
    }

    .btn-custom {
        margin-top: 15px;
    }
    </style>
</head>

<body>

    <!-- Background Section -->
    <div class="full-background">
        <div class="content">
            <h2>Perhitungan Bahan Buket Bunga</h2>
            <p>Masukkan jumlah buket yang diinginkan untuk menghitung total bahan yang dibutuhkan.</p>

            <!-- Form Perhitungan -->
            <div class="container">
                <form method="POST" id="perhitunganForm">
                    <div class="mb-3">
                        <label for="mawarMerah" class="form-label">Jumlah Buket Mawar Merah</label>
                        <input type="number" class="form-control" id="mawarMerah" name="mawarMerah"
                            placeholder="Masukkan jumlah buket Mawar Merah" required>
                    </div>
                    <div class="mb-3">
                        <label for="krisan" class="form-label">Jumlah Buket Krisan</label>
                        <input type="number" class="form-control" id="krisan" name="krisan"
                            placeholder="Masukkan jumlah buket Krisan" required>
                    </div>
                    <div class="mb-3">
                        <label for="mawarPutih" class="form-label">Jumlah Buket Mawar Putih</label>
                        <input type="number" class="form-control" id="mawarPutih" name="mawarPutih"
                            placeholder="Masukkan jumlah buket Mawar Putih" required>
                    </div>
                    <div class="mb-3">
                        <label for="sunflower" class="form-label">Jumlah Buket Sunflower</label>
                        <input type="number" class="form-control" id="sunflower" name="sunflower"
                            placeholder="Masukkan jumlah buket Sunflower" required>
                    </div>
                    <button type="submit" class="btn btn-outline-light btn-custom">Hitung Bahan</button>
                </form>

                <!-- Hasil Perhitungan -->
                <div class="result" id="hasilPerhitungan" style="display: none;">
                    <h4>Hasil Perhitungan Bahan:</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Bahan</th>
                                <th>Jumlah Bahan yang Diperlukan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pita (meter)</td>
                                <td id="pita"></td>
                            </tr>
                            <tr>
                                <td>Kain Kasa (meter)</td>
                                <td id="kainKasa"></td>
                            </tr>
                            <tr>
                                <td>Kertas Plastik (meter)</td>
                                <td id="kertasPlastik"></td>
                            </tr>
                            <tr>
                                <td>Bunga Segar (tangkai)</td>
                                <td id="bungaSegar"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk perhitungan -->
    <script type="text/javascript">
    function gaussJordan(A, B) {
        var n = A.length;
        var augmentedMatrix = [];

        // Gabungkan Matriks A dan B
        for (var i = 0; i < n; i++) {
            augmentedMatrix[i] = A[i].concat([B[i]]);
        }

        // Eliminasi Gauss-Jordan
        for (var i = 0; i < n; i++) {
            // Pencarian pivot
            var pivot = augmentedMatrix[i][i];

            // Pembagian baris
            for (var j = 0; j <= n; j++) {
                augmentedMatrix[i][j] /= pivot;
            }

            // Eliminasi baris lainnya
            for (var j = 0; j < n; j++) {
                if (j !== i) {
                    var factor = augmentedMatrix[j][i];
                    for (var k = 0; k <= n; k++) {
                        augmentedMatrix[j][k] -= factor * augmentedMatrix[i][k];
                    }
                }
            }
        }

        // Solusi berada pada kolom terakhir
        var solution = [];
        for (var i = 0; i < n; i++) {
            solution.push(augmentedMatrix[i][n]);
        }
        return solution;
    }

    // Fungsi untuk menghitung bahan
    function hitungBahan(event) {
        event.preventDefault();

        // Ambil jumlah buket
        var mawarMerah = parseInt(document.getElementById('mawarMerah').value) || 0;
        var krisan = parseInt(document.getElementById('krisan').value) || 0;
        var mawarPutih = parseInt(document.getElementById('mawarPutih').value) || 0;
        var sunflower = parseInt(document.getElementById('sunflower').value) || 0;

        // Matriks koefisien A
        var A = [
            [1.5, 1.5, 1.5, 1.5], // Pita
            [3, 4, 3, 5], // Kain Kasa
            [4, 4, 6, 9], // Kertas Plastik
            [5, 8, 5, 5] // Bunga Segar
        ];

        // Matriks konstanta B
        var B = [mawarMerah, krisan, mawarPutih, sunflower];

        // Hitung hasil Gauss-Jordan
        var result = gaussJordan(A, B);

        // Tampilkan hasil
        document.getElementById('pita').innerText = result[0] + ' meter';
        document.getElementById('kainKasa').innerText = result[1] + ' meter';
        document.getElementById('kertasPlastik').innerText = result[2] + ' meter';
        document.getElementById('bungaSegar').innerText = result[3] + ' tangkai';

        document.getElementById('hasilPerhitungan').style.display = 'block';
    }

    document.getElementById('perhitunganForm').addEventListener('submit', hitungBahan);
    </script>

    <!-- Script Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>