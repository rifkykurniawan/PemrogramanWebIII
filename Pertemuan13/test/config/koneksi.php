<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    //membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    //cek koneksi
    if ($conn->connect_error){
        die("Koneksi Gagal : " . $conn->connect_error);
    }else{
        echo "Berhasli";
    }

?>