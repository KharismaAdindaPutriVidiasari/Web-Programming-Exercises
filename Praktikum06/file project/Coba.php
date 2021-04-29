<?php
$a = $_POST['tebak'];
$b = $_COOKIE['bilanganacak'];

if ($a < $b){
    echo "Yahh, masih belum benar nih. Angka tebakan Anda terlalu rendah.";
    echo "<br>";
    echo "<br>";
    echo "<form method='POST' action='coba.php'>
            Bilangan tebakan Anda  <input type='text' name='tebak'>
            <input type='submit' name='submit' value='Submit'>
        </form>";
} elseif ($a > $b){
    echo "Yahh, masih belum benar nih. Angka tebakan Anda terlalu tinggi.";
    echo "<br>";
    echo "<br>";
    echo "<form method='POST' action='coba.php'>
            Bilangan prediksi Anda  <input type='text' name='tebak'>
            <input type='submit' name='submit' value='Submit'>
        </form>";
} else {
    header("Location:Finish.php");
}
?>