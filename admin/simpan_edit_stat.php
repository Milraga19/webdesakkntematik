<?php

if (isset($_POST['editstat'])) {
    //Include file koneksi, untuk koneksikan ke database
    include '../koneksi.php';
    //Cek apakah ada kiriman form dari method post
    $id = $_POST['id'];
    $data = $_POST['data'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE statistikdesa SET data= '$data',jumlah= '$jumlah' WHERE id = '$id'";

    $simpan_bank = mysqli_query($koneksi, $sql);

    if ($simpan_bank) {
        echo "<script> alert('Edit Berhasil')</script>";
        header("Location:statistikadmin.php");
    } else {
        echo
        "<script> alert('Edit Gagal')</script>";
        header("Location:editstat.php");
    }
}
