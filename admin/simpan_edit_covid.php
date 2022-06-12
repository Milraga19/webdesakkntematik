<?php

if (isset($_POST['editpotensi'])) {
    //Include file koneksi, untuk koneksikan ke database
    include '../koneksi.php';
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $ekstensi_diperbolehkan = array('png', 'jpg');
        $image = $_FILES['gambarcovid']['name'];
        $x = explode('.', $image);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambarcovid']['tmp_name'];

        if (!empty($image)) {
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

                //Mengupload gambar
                move_uploaded_file($file_tmp, 'upload/' . $image);
                $id = $_POST['id'];
                $tglupload = $_POST['tglupload'];

                $sql = "UPDATE covid19 SET tglupload= '$tglupload',gambarcovid= '$image' WHERE id = '$id'";

                $simpan_bank = mysqli_query($koneksi, $sql);

                if ($simpan_bank) {
                    echo "<script> alert ('Edit Berhasil')</script>";
                    header("Location:covid19.php");
                } else {
                    echo
                    "<script> alert ('Edit Gagal')</script>";
                    header("Location:covid19.php");
                }
            }
        } else {
            // $image = "default.jpg";
            //Mengupload gambar
            // move_uploaded_file($file_tmp, 'upload/' . $image);
            $id = $_POST['id'];
            $tglupload = $_POST['tglupload'];

            $sql = "UPDATE covid19 SET tglupload= '$tglupload' WHERE id = '$id'";

            $simpan_bank = mysqli_query($koneksi, $sql);

            if ($simpan_bank) {
                echo "<script> alert('Edit Berhasil')</script>";
                header("Location:covid19.php");
            } else {
                echo
                "<script> alert('Edit Gagal')</script>";
                header("Location:covid19.php");
            }
        }
    }
}
