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
    // Data nilai akhir siswa
    $nilai_siswa = array(
        1 => array("Poin" => 75, "Siswa" => "Adi"),
        2 => array("Poin" => 80, "Siswa" => "Joni"),
        3 => array("Poin" => 65, "Siswa" => "Jihan"),
        4 => array("Poin" => 70, "Siswa" => "Aya"),
        5 => array("Poin" => 85, "Siswa" => "Ita"),
        6 => array("Poin" => 90, "Siswa" => "Budi"),
        7 => array("Poin" => 95, "Siswa" => "Tini"),
        8 => array("Poin" => 65, "Siswa" => "Sari")
    );

    // a) Tampilkan poin siswa dengan nomor urut 5
    echo "Poin siswa dengan nomor urut 5 adalah: " . $nilai_siswa[5]['Poin'] . "<br>";

    // b) Tampilkan semua nama siswa yang memiliki poin 90
    echo "Nama siswa yang memiliki poin 90 adalah: ";
    foreach ($nilai_siswa as $siswa) {
        if ($siswa['Poin'] == 90) {
            echo $siswa['Siswa'] . ", ";
        }
    }
    echo "<br>";

    // c) Tampilkan semua nama siswa yang memiliki poin 100
    $ada_siswa_poin_100 = false;
    echo "Nama siswa yang memiliki poin 100 adalah: ";
    foreach ($nilai_siswa as $siswa) {
        if ($siswa['Poin'] == 100) {
            echo $siswa['Siswa'] . ", ";
            $ada_siswa_poin_100 = true;
        }
    }
    if (!$ada_siswa_poin_100) {
        echo "Tidak ada";
    }
    ?>
</body>
</html>