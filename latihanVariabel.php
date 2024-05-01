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
    <?php
    // Membuat array yang berisi nama-nama hari
    $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

    // Menampilkan nama-nama hari menggunakan loop
    foreach ($hari as $nama_hari) {
        echo $nama_hari . "<br>";
    }
    ?>
</body>
</html>