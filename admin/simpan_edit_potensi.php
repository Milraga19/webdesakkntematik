<?php

if (isset($_POST['editpotensi'])) {
    //Include file koneksi, untuk koneksikan ke database
    include '../koneksi.php';
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $ekstensi_diperbolehkan = array('png', 'jpg');
        $image = $_FILES['gambarpotensi']['name'];
        $x = explode('.', $image);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambarpotensi']['tmp_name'];

        if (!empty($image)) {
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

                //Mengupload gambar
                move_uploaded_file($file_tmp, 'upload/' . $image);
                $id = $_POST['id'];
                $judulpotensi = $_POST['judulpotensi'];
                $deskripsipotensi = $_POST['deskripsipotensi'];
                $narasipotensi = $_POST['narasipotensi'];
                $tglupload = $_POST['tglupload'];

                $sql = "UPDATE potensidesa SET judulpotensi= '$judulpotensi',deskripsipotensi= '$deskripsipotensi',narasipotensi= '$narasipotensi',tglupload= '$tglupload',gambarpotensi= '$image' WHERE id = '$id'";

                $simpan_bank = mysqli_query($koneksi, $sql);

                if ($simpan_bank) {
                    echo "<script> alert ('Edit Berhasil')</script>";
                    header("Location:potensidesa.php");
                } else {
                    echo
                    "<script> alert ('Edit Gagal')</script>";
                    header("Location:potensidesa.php");
                }
            }
        } else {
            // $image = "default.jpg";
            //Mengupload gambar
            // move_uploaded_file($file_tmp, 'upload/' . $image);
            $id = $_POST['id'];
            $judulpotensi = $_POST['judulpotensi'];
            $deskripsipotensi = $_POST['deskripsipotensi'];
            $narasipotensi = $_POST['narasipotensi'];
            $tglupload = $_POST['tglupload'];

            $sql = "UPDATE potensidesa SET judulpotensi= '$judulpotensi',deskripsipotensi= '$deskripsipotensi',narasipotensi= '$narasipotensi',tglupload= '$tglupload' WHERE id = '$id'";

            $simpan_bank = mysqli_query($koneksi, $sql);

            if ($simpan_bank) {
                echo "<script> alert('Edit Berhasil')</script>";
                header("Location:potensidesa.php");
            } else {
                echo
                "<script> alert('Edit Gagal')</script>";
                header("Location:potensidesa.php");
            }
        }
    }
}
