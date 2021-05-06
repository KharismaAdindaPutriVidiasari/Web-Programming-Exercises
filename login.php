<?php
session_start();
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    setcookie("nama", $nama, time()+3*30*24*3600,"/");
    $_SESSION['lives'] = 5;
    $_SESSION['score'] = 0;
    $_SESSION['bil1'] = rand(0,20);
    $_SESSION['bil2'] = rand(0,20);
    header("Location: index.php");
}

?>