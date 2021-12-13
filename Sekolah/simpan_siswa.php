<?php
include('koneksi.php');

//get data dari form
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

//query insert ke database
$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";

//kondisi untuk pengecekan apakah query di atas berhasil
if ($connection->query($query)) {
    # code...
    header("location:index.php");
}else{
    // Kondisi ketika gagal insert data
    echo "Data Gagal Disimpan";
}

?>