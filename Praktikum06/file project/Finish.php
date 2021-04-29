<?php
echo "SELAMATT, ANGKA YANG ANDA TEBAK BENAR.. HOREEE!! " .$_COOKIE['bilanganacak'];
setcookie("bilanganacak", "", time()-3*30*24*3600,"/");
echo "<br>";
echo "<br>";
echo "<a href='Start.php'>ulangi lagi</a>";
echo "<- link untuk mengulangi permainan kembali"
?>