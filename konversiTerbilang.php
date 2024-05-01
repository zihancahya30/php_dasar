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
    <h2>Konversi Angka ke Terbilang</h2>

    <form method="post">
        <label for="angka">Masukkan angka (1-9):</label>
        <input type="number" name="angka" id="angka" min="1" max="9" required>
        <button type="submit">Konversi</button>
    </form>

    <?php
    // Fungsi untuk mengkonversi angka menjadi terbilang
    function konversi_terbilang($angka) {
        switch ($angka) {
            case 1:
                return 'satu';
                break;
            case 2:
                return 'dua';
                break;
            case 3:
                return 'tiga';
                break;
            case 4:
                return 'empat';
                break;
            case 5:
                return 'lima';
                break;
            case 6:
                return 'enam';
                break;
            case 7:
                return 'tujuh';
                break;
            case 8:
                return 'delapan';
                break;
            case 9:
                return 'sembilan';
                break;
            default:
                return 'Angka tidak valid';
        }
    }

    // Proses jika form dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $angka = $_POST['angka'];

        // Melakukan konversi angka menjadi terbilang
        $terbilang = konversi_terbilang($angka);

        // Menampilkan hasil konversi
        echo "<p>Angka $angka dalam terbilang adalah: $terbilang</p>";
    }
    ?>
</body>
</html>