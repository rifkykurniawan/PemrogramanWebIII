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
        $nama[] = "Zakiuddin"; 
        echo "Hallo<br>"; 
        echo "Isi array \$anak[0] adalah $nama[0]"; 
        echo "<br>"; 
        echo "Isi array \$anak[1] adalah $nama[1]"; 
        echo "<br>"; 
        echo "Isi array \$anak[2] adalah $nama[2]"; 
        echo "<br>";
        ?>
    <h2>Menampilkan Array dengan menunjuk nomor indeksnya</h2>
        <?php 
        $anak[0] = "Faruq"; 
        $anak[1] = "Alya"; 
        $anak[2] = "Zahro"; 
        echo "Isi array \$anak[0] 
        adalah $anak[0]"; 
        echo "<br>"; 
        echo "Isi array \$anak[1] 
        adalah $anak[1]"; 
        echo "<br>"; 
        echo "Isi array \$anak[2] 
        adalah $anak[2]"; 
        echo "<br>"; 
        ?>
    <h2>Menampilkan Array dengan foreach</h2>
        <?php 

        //cocok digunakan jika mengambil data dari database
        $anak[0] = "Faruq"; 
        $anak[1] = "Alya"; 
        $anak[2] = "Zahro"; 
        foreach ($anak as $value) { 
        echo "Nama anak : $value"; 
        echo "<br>"; 
        } 
        ?>
    <h2>Menampilkan Array secara Assosiatif</h2>
        <?php
        $telpon["Farid"] = "5982345"; 
        $telpon["Fikri"] = "7782345"; 
        $telpon["Nida"] = "4562345"; 
        echo "Telpon Farid : ".$telpon ['Farid']; 
        echo "<br>"; 
        echo "Telpon Fikri : ".$telpon ['Fikri']; 
        echo "<br>"; 
        echo "Telpon Nida : ".$telpon ['Nida']; 
        echo "<br>";
        ?>
    <h2>Pemakaian Fungsi Built-in : Matmatika</h2>
        <?php
        $a = pow(2,10); //Fungsi perpangkatan 
        $b = sqrt(100); //Fungsi akar 
        $c = ceil(4.25); //Pembulatan keatas 
        $d = floor(4.25); //Pembulatan kebawah 
        echo "2 pangkat 10 = $a <br>"; 
        echo "akar 100 = $b <br>"; 
        echo "ceil(4.25) = $c <br>"; 
        echo "floor(4.25) = $d <br>"; 
        ?>



    <h2>Pemakaian Fungsi Built in : Date & Time</h2>
        <?php
        $skr = date("d/m/Y"); 
        echo "Sekarang adalah tanggal $skr <br>"; 
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("h:i:s A"); //A menunjukkan AM atau PM 
        echo "Jam menunjukkan pukul : $waktu"; 
        ?>
    <h2>Pemakaian Fungsi Built-in : String</h2>
        <?php
        $str = "Belajar PHP ternyata Menyenangkan"; 
        echo strtolower($str); //Ubah huruf ke kecil semua 
        echo "<br>"; 
        echo strtoupper($str); //Ubah huruf ke besar semua 
        echo "<br>"; 
        echo str_replace("Menyenangkan","mudah lho",$str); 
        //Mengganti string 
        ?>
    <h2>Pemakaian Fungsi Berisi Nilai Balik</h2>
        <?php
        function psgpjg ($pjg, $lbr) { 
        $luas = $pjg * $lbr; 
        return $luas; 
        } 
        $bil1 = 5; 
        $bil2 = 3; 
        echo "Luas persegi panjang dengan panjang 5 dan lebar 3 ="; 
        echo psgpjg($bil1,$bil2); 
        ?>
    <h2>Pemakaian Fungsi : Tanpa nilai parameter</h2>
        <?php    
        function pesan() {    
        echo "Selamat Belajar di Universitas Teknologi Yogyakarta!";    
        }    
        pesan();
        ?> 



</body>
</html>