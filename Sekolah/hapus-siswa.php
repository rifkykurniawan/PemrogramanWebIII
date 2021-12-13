<?php
    include('koneksi.php');

    //get id
    $id = $_GET['id'];

    $query = "DELETE FROM tbl_siswa WHERE Id_siswa = '$id'";

    if ($connection->query($query)) {
        # code...
        header("location:index.php");
    }else {
        # code...
        echo "Data Gagal Dihapus!!";
    }
?>