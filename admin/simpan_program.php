<?php

if (isset($_POST['tambah'])) {
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
                $judulprogram = $_POST['judulprogram'];
                $deskripsiprogram = $_POST['deskripsiprogram'];
                $narasiprogram = $_POST['narasiprogram'];
                $tglupload = $_POST['tglupload'];

                $sql = "insert into kkntematik (judulprogram,deskripsiprogram,narasiprogram,tglupload,gambarprogram) values ('$judulprogram','$deskripsiprogram','$narasiprogram','$tglupload','$image')";

                $simpan_bank = mysqli_query($koneksi, $sql);

                if ($simpan_bank) {
                    echo "<script> alert ('Simpan Berhasil')</script>";
                    header("Location:kkntematik.php");
                } else {
                    echo
                    "<script> alert ('Simpan Gagal')</script>";
                    header("Location:kkntematik.php");
                }
            }
        } else {
            $image = "default.jpg";
            //Mengupload gambar
            move_uploaded_file($file_tmp, 'upload/' . $image);
            $judulprogram = $_POST['judulprogram'];
            $deskripsiprogram = $_POST['deskripsiprogram'];
            $narasiprogram = $_POST['narasiprogram'];
            $tglupload = $_POST['tglupload'];

            $sql = "insert into kkntematik (judulprogram,deskripsiprogram,narasiprogram,tglupload,gambarprogram) values ('$judulprogram','$deskripsiprogram','$narasiprogram','$tglupload','$image')";

            $simpan_bank = mysqli_query($koneksi, $sql);

            if ($simpan_bank) {
                echo "<script> alert ('Simpan Berhasil')</script>";
                header("Location:kkntematik.php");
            } else {
                echo
                "<script> alert ('Simpan Gagal')</script>";
                header("Location:kkntematik.php");
            }
        }
    }
}
