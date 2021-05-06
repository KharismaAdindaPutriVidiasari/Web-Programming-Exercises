<?php
//session start
session_start();
//menghapus semua session
session_destroy();
//set cookie ke nilai null
setcookie("nama", "", time()+3*30*24*3600,"/");
//redirect ke halaman login
header("Location: index.php");
?>