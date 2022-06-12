<?php
include 'koneksi.php';
if ($_POST['kirim']) {
    $namalengkap    = $_POST['nama_lengkap'];
    $dusun = $_POST['dusun'];
    $judul    = $_POST['judul'];
    $pesan    = $_POST['pesan'];
    $sql = mysqli_query($koneksi, "INSERT INTO complaint (nama_lengkap,dusun,judul,pesan) VALUES ('$namalengkap','$dusun','$judul','$pesan')");
    // $pengirim	= 'Dari: ' . $namadepan . ' <' . $email . '>';

    // if (mail($admin, $judul, $pesan, $pengirim)) {
    echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
    // } else {
    // }
} else {
    echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';

    header("Location: pengaduan.php");
}
