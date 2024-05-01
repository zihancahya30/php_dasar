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
    $namaBuah = array("Nanas", "Mangga", "jeruk", "Apel","Melon", "Manggis");
    echo "saya suka " . $namaBuah[0] . "," .$namaBuah[1] .  ", dan " . $namaBuah[2] . ".<br>";
    // tampikan Mangga
    echo "saya suka " . $namaBuah[1]. ".<br>"; 
    // tampikan Jeruk
    echo "saya suka " . $namaBuah[2]. ".<br>"; 
    // tampikan Apel
    echo "saya suka " . $namaBuah[3]. ".<br>"; 
    // tampikan Melon
    echo "saya suka ". $namaBuah[4]. ".<br>";
    
    echo "<br>";

    // array dengan spesifik index
    $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"Tahun");
    $umur ['Ahmad']="50 Tahun";
    echo "Umur Andi adalah " . $umur['Andi']. ".<br>";
    // tampikan semua umur
    foreach ($umur as $nama => $umur_seseorang) {
        echo "Umur $nama adalah $umur_seseorang.<br>";
    }
    ?>
</body>
</html>