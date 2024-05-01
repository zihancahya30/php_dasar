<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descriptions" content="Belajar PHP">
    <meta name="keywords" content="233307030">
    <meta name="author" content="Zihan Cahya Amelia">
</head>
<body>
    <h1>Halaman PHP Zihan</h1>
    <h2>Konversi Nilai</h2>

    <form method="post" onreset="resetResult()">
        <label for="nilai">Masukkan nilai angka:</label>
        <input type="number" name="nilai" id="nilai" required>
        <button type="submit">Konversi</button>
        <button type="reset">Reset</button>
    </form>

    <div id="result">
        <!-- Hasil konversi akan ditampilkan di sini -->
    </div>

    <?php
    // Fungsi untuk mengkonversi nilai angka ke huruf
    function konversi_nilai($nilai) {
        if ($nilai >= 90 && $nilai <= 100) {
            return 'A';
        } elseif ($nilai >= 80 && $nilai < 90) {
            return 'AB';
        } elseif ($nilai >= 70 && $nilai < 80) {
            return 'B';
        } elseif ($nilai >= 60 && $nilai < 70) {
            return 'BC';
        } elseif ($nilai >= 0 && $nilai < 60) {
            return 'C';
        } else {
            return 'Nilai tidak valid';
        }
    }

    // Proses jika form dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $nilai = $_POST['nilai'];

        // Melakukan konversi nilai
        $nilai_huruf = konversi_nilai($nilai);

        // Menampilkan hasil konversi
        echo "<script>document.getElementById('result').innerHTML = 'Nilai angka $nilai setara dengan nilai huruf: $nilai_huruf';</script>";
    }
    ?>

    <script>
        function resetResult() {
            document.getElementById('result').innerHTML = "";
        }
    </script>
</body>
</html>
