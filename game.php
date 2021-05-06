<?php
include('cek.php');
include('config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>UTS PEMROGRAMAN WEB</title>
  </head>
  <body style='background-color:#f39c12'>
    <div class="container" style='position:absolute;top:10%;left:20%;width:60%;text-align:center;'>
    <!-- Tampilan nyawa skor dan logout -->
    <div class="container" style='position:sticky;background-color:white;height:40px;border:5px solid white;border-radius:5px'>
    <div class="row">
        <div class="col">
        <?php
        session_start();
        $hasil = $_SESSION['bil1'] + $_SESSION['bil2'];

        if($_SESSION['lives'] < 1){
            echo "<b>GAME OVER</b>";
        } else {
        for($i = 0; $i < ($_SESSION['lives']); $i++){
            echo "<img src='heart.png' height='25px'>";
        }
        }?>
        </div>
        <div class="col">
        <?php
        echo "<b>Score <".$_SESSION['score']."></b>";?>
        </div>
        <div class="col">
        <?php
        echo "<a class='btn btn-danger btn-sm' href='logout.php'>Log Out</a>";
        ?>
        </div>
    </div>
    </div>
    <!-- Tampilan nyawa skor dan logout -->
    <p><br></p>
    <p><br></p>
    <!-- Tampilan soal -->
    <?php
    if ($_SESSION['lives'] > 0){
        if(!isset($_POST['submit'])){
            echo "<p><h1>AYO ".$_COOKIE['nama']." KAMU PASTI BISA</h1>";
            echo "<p><form method='post'>";
            echo "<p><h4>".$_SESSION['bil1']." + ".$_SESSION['bil2']." = ";
            echo "<input type='text' class='form-control-sm' name='jawaban'>
            <button type='submit' class='btn btn-danger btn-sm' name='submit'>Jawab</button></form></p>";
        } else {
            $jawaban = intval($_POST['jawaban']);
            if ($jawaban == $hasil){
                $_SESSION['score'] += 10;
                echo "<p><h1>SELAMAT ".$_COOKIE['nama']." JAWABAN KAMU BENAR</h1>";
                echo "<a class='btn btn-success btn-md' href='game.php'>Next</a></p>";

            } else {
                $_SESSION['score'] -= 2;
                $_SESSION['lives'] -= 1;
                echo "<p><h1>SEMANGAT ".$_COOKIE['nama']."</h1>";
                echo "<p><h4>Jawaban Anda belum benar</h4></p>";
                echo "<a class='btn btn-success btn-md' href='game.php'>Next</a></p>";
            }

            $_SESSION['bil1'] = rand(0,20);
            $_SESSION['bil2'] = rand(0,20);
        }
    } else {
        echo "<p><h1>GAME OVER</h1>";
        echo "<p><h4>Score <".$_SESSION['score']."></p>";
        echo "<p>Yah sayang sekali, Anda kurang beruntung.<br>Semoga di game selanjutnya lebih baik lagi. Semangat</h4></p>";\
        score ($host, $user, $pass, $db, $_COOKIE['nama'], $_SESSION['score']);
        ranking ($host, $user, $pass, $db);
        echo "<a class='btn btn-danger btn-md' href='game.php'>Main lagi</a></p>";
        $_SESSION['lives'] = 5;
        $_SESSION['score'] = 0;
    }
    ?>
    </div>

    
  </body>
</html>