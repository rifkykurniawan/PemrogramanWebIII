<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    //membuat koneksinya
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //cek koneksi
    if (!$conn) {
        # code...
        die ("Koneksi Gagal " . mysqli_connect_error());
    }else{
        echo "Koneksi Berhasil";
    }
?>