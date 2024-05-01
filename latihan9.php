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
    // Contoh fungsi
    function writeMsg($nama) {
        echo "Selamat datang ". $nama . "<br>";
    }
    writeMsg("Ahmad"); //pemanggilan fungsi

    // fungsi dengan mengirim nilai balik 
    function tambah(int $angka1, int $angka2) {
        $a= $angka1 + $angka2;
        return $a; // mengirim nilai $a ke pemanggil
    }
    $hasil = tambah(5, 5);
    echo ($hasil); // Menampilkan hasil penjumlahan
    ?>
</body>
</html>