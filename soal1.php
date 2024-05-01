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
    // Gaji pokok
    $gaji_pokok = 3250000;

    // Tunjangan jabatan
    $tunjangan_jabatan = 1200000;

    // Hitung gaji kotor
    $gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

    // Persentase pajak
    $pajak_persentase = 10 / 100;

    // Hitung pajak
    $pajak = $gaji_kotor * $pajak_persentase;

    // Hitung gaji bersih
    $gaji_bersih = $gaji_kotor - $pajak;

    // Tampilkan hasil
    echo "Gaji bersih yang diterima Obi setiap bulannya adalah Rp. " . number_format($gaji_bersih, 2, ',', '.') . ",-";
    ?>
</body>
</html>