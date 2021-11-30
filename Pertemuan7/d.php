<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Skrip</title>
</head>
<body>
    <?php
    $nama = "Muhammad Faruq";
    echo "$nama berkata"
    \"katakan namamu!"\"";
    ?> 
    
</body>
</html>

//operator penugasan

<?php
$a = 3;
$b = 7;
$a += 5;
$b = ($c = 11) + 3;
echo "nilai variabel a adalah = $a";
echo "<BR>";
echo "nilai variabel a adalah = $b";
echo "<BR>";
echo "nilai variabel a adalah = $c";
?>

//operasi Aritmatika

<?php
$a=10;
$b=3;
echo "\$a = $a <BR>";
echo "\$b = $b <BR>";
// Penjumlahan
echo '\$a + $b = ';
print $a + $b;
echo "<BR>";
// Pengurangan
echo '\$a - $b = ';
print $a-$b;
echo "<BR>";
// Perkalian
echo '\$a * $b = ';
print $a-$b;
// Pembagian
echo '\$a / $b = ';
print $a-$b;

echo '\$a % $b = ';
print $a-$b;
?>


//operator logika

<?php
    $b = 4!=4;
    $b = 3+7 == 10;
    $a = ($b and $c);
    echo "\$a=$a <BR>";
    $a = ($b or $c);
    echo "\$a=$a <BR>";
    $a = ($b xor $c);
    echo "\$a=$a <BR>";
    $a = (!$b or $c);
    echo "\$a=$a <BR>";
    $a = ($b && $c);
    echo "\$a=$a <BR>";
    $a = ($b || $c);
    echo "\$a=$a <BR>";
?>


//operator perbandingan 

<?php
$x = 4;
$a = ($x == 4);
echo "\$a = $a <BR>";
$b = ($x === 4);
echo "\$b = $b <BR>";
$c = ($x != 4);
echo "\$c = $c <BR>";
$d = ($x !== 4);
echo "\$d = $d <BR>";
$e = ($x < 5);
echo "\$e = $e <BR>";
$f = ($x > 5);
echo "\$f = $f <BR>";
$g = ($x <= 4);
echo "\$g = $g <BR>";
$h = ($x >= 4);
echo "\$h = $h <BR>";
?>

// struktur kontrol if

<?php
$a = 5;
$b = 7;
if ($a < $b)
{
    echo "\$a lebih kecil daripada \$b";
}
\?>

//struktur kontrol if-else 

<?php
$a = 5;
$b = 3;
echo "\$a = $a <BR>";
echo "\$b = $b <BR>";
if ($a < $b)
{
    echo '$a lebih kecil daripada $b';
}
else 
{
    echo '$a lebih besar daripada $b';
}
?>

// syintax if else yg lain 


<?php
$a = 5;
$b = 7;
echo "\$a = $a <BR>";
echo "\$b = $b <BR>";
if ($a == $b) :
    echo '$a sama dengan $b';
    elseif ($a > $b) :
    echo '$a lebih besar daripada $b';
    else :
    echo '$a lebih kecil daripada $b';
    endif
?>

// struktur Switch 

<? 
$a = 5;
switch ($a) {
    case '0':
        echo '$a sama dengan 0';
        break;
    case '1':
        echo '$a sama dengan 1';
        break;
    case '2':
        echo '$a sama dengan 2';
        break;
    
    default:
        echo '$a tidak sama dengan 0, 1, 2,';
        break;
}
?>

// while 

<?php 
echo "<H3> Cara 1 </H3>"
$i = 1;
while ($i <= 10)
{
    print $i++
}
echo "<BR>";
echo "<H3> Cara 2 </H3>";
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?>

// do while

<?php
$i = 2;
do 
{
    echo "\$i = $i <BR>";
    $i++;
}
while ($i < 5);
?>


// for 

<?php
for ($i =1; $<=10;$i++) {
    print $i;
}
?>









