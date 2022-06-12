<?php

if (isset($_POST['editprogram'])) {
    //Include file koneksi, untuk koneksikan ke database
    include '../koneksi.php';
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $ekstensi_diperbolehkan = array('png', 'jpg');
        $image = $_FILES['gambarprogram']['name'];
        $x = explode('.', $image);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambarprogram']['tmp_name'];

        if (!empty($image)) {
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

                //Mengupload gambar
                move_uploaded_file($file_tmp, 'upload/' . $image);
                $id = $_POST['id'];
                $judulprogram = $_POST['judulprogram'];
                $deskripsiprogram = $_POST['deskripsiprogram'];
                $narasiprogram = $_POST['narasiprogram'];
                $tglupload = $_POST['tglupload'];

                $sql = "UPDATE kkntematik SET judulprogram= '$judulprogram',deskripsiprogram= '$deskripsiprogram',narasiprogram= '$narasiprogram',tglupload= '$tglupload',gambarprogram= '$image' WHERE id = '$id'";

                $simpan_bank = mysqli_query($koneksi, $sql);

                if ($simpan_bank) {
                    echo "<script> alert ('Edit Berhasil')</script>";
                    header("Location:kkntematik.php");
                } else {
                    echo
                    "<script> alert ('Edit Gagal')</script>";
                    header("Location:kkntematik.php");
                }
            }
        } else {
            // $image = "default.jpg";
            //Mengupload gambar
            // move_uploaded_file($file_tmp, 'upload/' . $image);
            $id = $_POST['id'];
            $judulprogram = $_POST['judulprogram'];
            $deskripsiprogram = $_POST['deskripsiprogram'];
            $narasiprogram = $_POST['narasiprogram'];
            $tglupload = $_POST['tglupload'];

            $sql = "UPDATE kkntematik SET judulprogram= '$judulprogram',deskripsiprogram= '$deskripsiprogram',narasiprogram= '$narasiprogram',tglupload= '$tglupload' WHERE id = '$id'";

            $simpan_bank = mysqli_query($koneksi, $sql);

            if ($simpan_bank) {
                echo "<script> alert('Edit Berhasil')</script>";
                header("Location:kkntematik.php");
            } else {
                echo
                "<script> alert('Edit Gagal')</script>";
                header("Location:kkntematik.php");
            }
        }
    }
}
