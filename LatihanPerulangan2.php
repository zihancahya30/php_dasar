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
    // Array dengan nama angka
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    // Melakukan iterasi melalui setiap elemen dalam array
    foreach ($angka as $nilai) {
        // Memeriksa apakah nilai tersebut ganjil atau genap
        if ($nilai % 2 == 0) {
            echo "$nilai adalah genap.<br>";
        } else {
            echo "$nilai adalah ganjil.<br>";
        }
    }
    ?>
</body>
</html>