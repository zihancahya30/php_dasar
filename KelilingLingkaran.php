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
    <h2>Halaman PHP Zihan</h2>

    <?php
    // Deklarasi variabel jari-jari
    $jari_jari = 15; // dalam satuan cm

    // Menghitung keliling lingkaran
    $keliling = 2 * 3.14 * $jari_jari; // Rumus keliling lingkaran: 2 * π * r

    // Menampilkan hasil
    echo "<p>Diketahui jari-jari (r) sebuah lingkaran adalah 15 cm. Hitunglah keliling dari lingkaran tersebut dengan ketentuan Pi = 3,14 !</p>";
    echo "<p>Untuk menentukan keliling lingkaran kita harus menggunakan rumus berikut 2 * π * r, maka :</p>";
    echo "Keliling lingkaran dengan jari-jari $jari_jari cm adalah: " . $keliling . " cm";
    ?>
</body>
</html>