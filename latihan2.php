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
    //variabel dalam php
    $txt = "Selamat datang!";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi Variable txt adalah: $txt</p>";
    echo "<p>isi Variable x adalah: $x</p>";
    echo "<p>isi Variable y adalah: $y</p>";
    echo "Belajar PHP di " . $txt2 . "<br";
    echo $x + $y;

    //PHP konstanta
    define("nama_konstanta" , "{Zihan Cahya Amelia}");
    echo "<br>".nama_konstanta;

    ?>
</body>
</html>
