<?php
include '../koneksi.php';

$id = $_GET["id"];
$image = $_GET["image"];
$sql = "delete from kkntematik where id=$id";
$hapus_bank = mysqli_query($koneksi, $sql);

//Menghapus file gambar
if ($image == "default.jpg") {
    if ($hapus_bank) {
        echo "<script> alert ('Hapus Berhasil')</script>";
        header("Location:kkntematik.php");
    } else {
        echo "<script> alert('Hapus Gagal')</script>";
        header("Location:kkntematik.php");
    }
} else {
    unlink("../img/" . $image);
    if ($hapus_bank) {
        echo "<script> alert('Hapus Berhasil')</script>";
        header("Location:kkntematik.php");
    } else {
        echo "<script> alert('Hapus Gagal')</script>";
        header("Location:kkntematik.php");
    }
}
