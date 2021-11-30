<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP</title>
</head>
<body>


<!-- Pemakaian Variabel -->
<h3>Pemakaian Variabel</h3>
<?php
    $nama = "tes";
    echo $nama;
?>
<br>
<h3>Operator Penugasan</h3>
<!-- Operator Penugasan -->
<?php
    $a = 3;
    $b = 7;
    $a +=5;
    $b = ($c = 11) + 3;
    echo "Nilai variabel a adalah = $a";
    echo "<br>";
    echo "Nilai variabel b adalah = $b";
    echo "<br>";
    echo "Nilai variabel c adalah = $c";
?>
<br>
<!-- Operasi Aritmatika -->
<h3>Operator Aritmatika</h3>
<?php
        $u = 1;
        $y = 2;
        echo "Penjumlahan : ";
        echo $u + $y;
        echo "<br>";
        echo "Pengurangan : ";
        echo $u - $y;
        echo "<br>";
        echo "Perkalian : ";
        echo $u * $y;
        echo "<br>";
        echo "Pembagian : ";
        echo $u / $y;
        echo "<br>";
        echo "Modulus (Sisa Hasil Bagi) : ";
        echo $u & $y; //simbol "dan"
    ?>
    <!-- Operator Logika -->
    <h3>Operator Logika</h3>
    <h5>AND</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u == 1 and $y ==2);
        var_dump ($u == 1 && $y ==2); //DENGAN 2 SIMBOL "DAN"
    ?>
    <h5>OR</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u == 1 or $y ==2);
        var_dump ($u == 1 || $y ==2);
    ?>
    <h5>XOR</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u == 1 xor $y ==2);
    ?>
    <h5>NOT</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u !== 9);
    ?>

https://icodeformoney.com/tuts/Continue-dan-break-pada-PHP

</body>
</html>