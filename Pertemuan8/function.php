<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Menampilkan Array tanpa menunjuk nomor indeks</h2>
    <?php
        $nama[] = "Muhammad";
        $nama[] = "Faruq";
        $nama[] = "Budi";

        echo "Isi array \$anak[0] adalah $nama[0]"; 
        echo "<br>";
        echo "Isi array \$anak[1] adalah $nama[1]"; 
        echo "<br>";
        echo "Isi array \$anak[2] adalah $nama[2]"; 
        echo "<br>";
    ?>
    <h2>Menampilkan Array dengan menunjuk nomor indeks</h2>
    <?php
        $nama[0] = "Muhammad";
        $nama[1] = "Faruq";
        $nama[2] = "Budi";

        echo "Isi array \$anak[0] adalah $nama[0]"; 
        echo "<br>";
        echo "Isi array \$anak[1] adalah $nama[1]"; 
        echo "<br>";
        echo "Isi array \$anak[2] adalah $nama[2]"; 
        echo "<br>";
    ?>

    <h2>Menampilkan Array dengan foreach</h2>
    <?php
        $anak[0] = "Dedi";
        $anak[1] = "Yudi";
        $anak[2] = "Anton";

        foreach ($anak as $value){
            echo "Nama anak : $value";
            echo "<br>";
        }
    ?>

    <h2>Menampilkan array secara asosiatif</h2>
    <?php
        $telpon["Fikri"] = "128903712903";
        $telpon["Farid"] = "2353542342323";
        $telpon["Dika"] = "2342523423423";

        echo "Telpon Farid : " . $telpon['Fikri'];
        echo "<br>";
        echo "Telpon Farid : " . $telpon['Farid'];
        echo "<br>";
        echo "Telpon Farid : " . $telpon['Dika'];
        echo "<br>";
    ?>

    <h2>Pemakaian Fungsi Built-in : Proses Matematika</h2>
    <?php
        $a = pow(2,10); //Fungsi Perpangkatan
        $b = sqrt(100); //Fungsi Akar
        $c = ceil(4.25); //Fungsi Pembulatan Keatas
        $d = floor(4.25); //Fungsi Pembulatan Kebawah

        echo " 2 Pangkat 10 = $a <br>";
        echo " Akar 100 = $b <br>";
        echo " Pembulatan keatas 4.25 = $c <br>";
        echo " Pembulatan kebawah 4.25 = $d";
    ?>

    <h2>Pemakaian Fungsi Built-in : Date & Time</h2>
    <?php
        //date
        $tanggal = date("d/m/Y");
        echo "Sekarang adalah tanggal $tanggal <br>";

        //time
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("h:i:s A");// A menunjukan AM atau PM
        echo "Jam Sekarang menunjukan pukul : $waktu";
    ?>

    <h2>Pemakaian Fungsi Built-in : String</h2>
    <?php
        $str = "Belajar PHP ternyata menyenangkan";
        echo "$str <br>";
        echo strtolower($str); //untuk mengubah huruf menjadi kecil semua
        echo "<br>";
        echo strtoupper($str); //untuk mengubah huruf menjadi kapital semua
        echo "<br>";
        echo str_replace("menyenangkan","mudah",$str); //mengganti isi string
    ?>

    <h2>Pemakaian Fungsi berisi nilai balik</h2>
    <?php
        function persegipanjang ($panjang, $lebar){
            $luas = $panjang * $lebar;
            return $luas;
        }

        $bilangan1 = 2;
        $bilangan2 = 4;

        echo "Luas Persegi Panjang dengan panjang 2 dan lebar 4 = ";
        echo persegipanjang($bilangan1,$bilangan2);
    ?>

    <h2>Fungsi tanpa nilai balik</h2>
    <?php
        function pesan(){
            echo "Selamat Belajar di UTY";
        }
        pesan();
    ?>
</body>
</html>