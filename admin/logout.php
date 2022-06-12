<?php
session_start();
unset($_SESSION['username']);
session_destroy();

echo "<script language=javascript>
	window.alert('Anda sudah logout');
	javascript:document.location='login.php';
	</script>";
