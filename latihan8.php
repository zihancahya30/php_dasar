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
    // data kelas dengan array 2 dimensi 
    $array = array(
        "1C" => array("Udin", "Ismail", "Adi"),
        "1D" => array("Lukman", "Fajri", "Mahmud")
    );
    // menampilkan data array
    print_r($array);
    echo "<br>";

    //menapilkan kelas 1C 
    print_r($array['1C']);
    echo "<br>";

    // menampilkan kelas 1D dengan index 0
    echo $array['1D'][0];
    echo "<br>";

    // tampilkan Fajri
    echo $array['1D'][1];
    echo "<br>";

    // tampilkan Adi
    echo $array['1C'][2];
    echo "<br>";

    // data kelas bisa ditulis juga dengan 
    $array_simple = array (
        "1C" =>array("udin", "ismail", "adi"), 
        "1D" =>array("Lukman", "fajri", "mahmud")  
    );

    // Menampilkan data array dengan notasi sederhana
    print_r($array_simple);
    ?>
</body>
</html>