<?php

if (isset($_POST['edit'])) {
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
                $id = $_POST['id'];
                $judulberita = $_POST['judulberita'];
                $deskripsiberita = $_POST['deskripsiberita'];
                $narasiberita = $_POST['narasiberita'];
                $tglupload = $_POST['tglupload'];

                $sql = "UPDATE beritadesa SET judulberita= '$judulberita',deskripsiberita= '$deskripsiberita',narasiberita= '$narasiberita',tglupload= '$tglupload',gambarberita= '$image' WHERE id = '$id'";

                $simpan_bank = mysqli_query($koneksi, $sql);

                if ($simpan_bank) {
                    echo "<script> alert('Edit Berhasil')</script>";
                    header("Location:beritadesa.php");
                } else {
                    echo
                    "<script> alert('Edit Gagal')</script>";
                    header("Location:beritadesa.php");
                }
            }
        } else {
            // $image = $_POST["gambarberitaexist"];
            //Mengupload gambar
            // move_uploaded_file($file_tmp, 'upload/' . $image);
            $id = $_POST['id'];
            $judulberita = $_POST['judulberita'];
            $deskripsiberita = $_POST['deskripsiberita'];
            $narasiberita = $_POST['narasiberita'];
            $tglupload = $_POST['tglupload'];

            $sql = "UPDATE beritadesa SET judulberita= '$judulberita',deskripsiberita= '$deskripsiberita',narasiberita= '$narasiberita',tglupload= '$tglupload' WHERE id = '$id'";

            $simpan_bank = mysqli_query($koneksi, $sql);

            if ($simpan_bank) {
                echo "<script> alert('Edit Berhasil')</script>";
                header("Location:beritadesa.php");
            } else {
                echo
                "<script> alert('Edit Gagal')</script>";
                header("Location:editberita.php");
            }
        }
    }
}
