<?php

if (isset($_POST['tambah'])) {
    //Include file koneksi, untuk koneksikan ke database
    include '../koneksi.php';
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $ekstensi_diperbolehkan = array('png', 'jpg');
        $image = $_FILES['gambarberita']['name'];
        $x = explode('.', $image);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambarberita']['tmp_name'];

        if (!empty($image)) {
            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

                //Mengupload gambar
                move_uploaded_file($file_tmp, 'upload/' . $image);
                $judulberita = $_POST['judulberita'];
                $deskripsiberita = $_POST['deskripsiberita'];
                $narasiberita = $_POST['narasiberita'];
                $tglupload = $_POST['tglupload'];

                $sql = "insert into beritadesa (judulberita,deskripsiberita,narasiberita,tglupload,gambarberita) values ('$judulberita','$deskripsiberita','$narasiberita','$tglupload','$image')";

                $simpan_bank = mysqli_query($koneksi, $sql);

                if ($simpan_bank) {
                    echo "<script> alert ('Simpan Berhasil')</script>";
                    header("Location:beritadesa.php");
                } else {
                    echo
                    "<script> alert ('Simpan Gagal')</script>";
                    header("Location:beritadesa.php");
                }
            }
        } else {
            $image = "default.jpg";
            //Mengupload gambar
            move_uploaded_file($file_tmp, 'upload/' . $image);
            $judulberita = $_POST['judulberita'];
            $deskripsiberita = $_POST['deskripsiberita'];
            $narasiberita = $_POST['narasiberita'];
            $tglupload = $_POST['tglupload'];

            $sql = "insert into beritadesa (judulberita,deskripsiberita,narasiberita,tglupload,gambarberita) values ('$judulberita','$deskripsiberita','$narasiberita','$tglupload','$image')";

            $simpan_bank = mysqli_query($koneksi, $sql);

            if ($simpan_bank) {
                echo "<script> alert ('Simpan Berhasil')</script>";
                header("Location:beritadesa.php");
            } else {
                echo
                "<script> alert ('Simpan Gagal')</script>";
                header("Location:beritadesa.php");
            }
        }
    }
}
