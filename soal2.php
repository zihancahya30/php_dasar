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

    <?php
    // Jumlah uang yang diambil oleh Ani
    $jumlah_uang = 1387500;

    // Pecahan uang yang berlaku
    $pecahan_uang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

    // Inisialisasi array untuk menyimpan jumlah masing-masing pecahan uang
    $jumlah_pecahan = array();

    // Looping untuk menghitung banyaknya masing-masing pecahan uang
    foreach ($pecahan_uang as $pecahan) {
        // Hitung jumlah pecahan uang yang diperlukan
        $jumlah = floor($jumlah_uang / $pecahan);
        // Simpan jumlah pecahan ke dalam array
        $jumlah_pecahan[$pecahan] = $jumlah;
        // Kurangi jumlah uang dengan pecahan yang sudah dihitung
        $jumlah_uang -= $jumlah * $pecahan;
    }

    // Tampilkan hasil
    foreach ($jumlah_pecahan as $pecahan => $jumlah) {
        echo "Pecahan Rp. " . number_format($pecahan, 0, ',', '.') . ",- : " . $jumlah . " lembar<br>";
    }
    ?>
</body>
</html>