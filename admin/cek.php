<?php
include("../koneksi.php");
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $sql = mysqli_query($koneksi, "SELECT*FROM userlogin WHERE username='$username' AND password='$password'");
    $jumlah = mysqli_num_rows($sql);
    $data = mysqli_fetch_array($sql);
    if ($jumlah > 0) {
        session_start();
        $_SESSION["username"] = $username;
        if ($data["level"] == '1') {
            echo "<script language=javascript>
            window.alert ('Anda Berhasil Login')
            javascript:document.location='dashboard.php'
            </script>";
        }
    } else {
        echo "<script language=javascript>
        window.alert ('Login Gagal')
        javascript:document.location='login.php'
        </script>";
    }
}
