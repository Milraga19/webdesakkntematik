<?php
include '../koneksi.php';

$id = $_GET["id"];
$image = $_GET["image"];
$sql = "delete from beritadesa where id=$id";
$hapus_bank = mysqli_query($koneksi, $sql);

//Menghapus file gambar
if ($image == "default.jpg") {
    if ($hapus_bank) {
        echo "<script> alert ('Hapus Berhasil')</script>";
        header("Location:beritadesa.php");
    } else {
        echo "<script> alert ('Hapus Gagal')</script>";
        header("Location:beritadesa.php");
    }
} else {
    unlink("../img/" . $image);
    if ($hapus_bank) {
        echo "<script> alert ('Hapus Berhasil')</script>";
        header("Location:beritadesa.php");
    } else {
        echo "<script> alert ('Hapus Gagal')</script>";
        header("Location:beritadesa.php");
    }
}
