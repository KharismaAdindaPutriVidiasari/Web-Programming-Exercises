<?php
$number = rand(1, 100);
setcookie("bilanganacak", $number, time()+3*30*24*3600,"/");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Game Tebakan</title>
    </head>
    <body>
        <h1>Selamat Datang</h1>
        <p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
        <form method="POST" action="Coba.php">
            Bilangan tebakan Anda  <input type="text" name="tebak">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>