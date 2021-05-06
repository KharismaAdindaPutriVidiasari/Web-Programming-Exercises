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
    <div class="container" style='position:absolute;top:15%;left:20%;width:60%;text-align:center'>
        <p><h1>Selamat Datang Di Game Matematika</h1></p>
        <?php
            if(!isset($_COOKIE['nama'])){
                ?>
                
                <br>
                <p><h3>Login</h3></p>

                <form method='post' action='login.php'>
                <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label><br>
                        <input type="text" class="form-control-md" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label><br>
                        <input type="email" class="form-control-md" name="email">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form> 
                <?php
            } else {
                echo "<br><p><h5>Hello ".$_COOKIE['nama']." Selamat Datang di Game Matematika</h5></p>";
                ?>
                <center>
                <p><h6>Rules</h6>
                <div class="scroll" style="width:50%;padding:10px;overflow-y:scroll;height:150px;text-align:left;border: 2px solid white;border-radius:5px;background-color:#d35400;color:white">
                    <p><b>1.</b> Pada awal game diberikan 5 lives
                    <br><b>2.</b> Setiap kali menjawab benar, mendapatkan score 10
                    <br><b>3.</b> Setiap menjawab salah, lives berkurang 1 dan score berkurang 2
                    <br><b>4.</b> Ketika lives sudah mencapai 0, maka game akan berhenti
                    <br><b>5.</b> Anda dapat mengulang game dengan nama yang sama
                    <br><b>6.</b> Anda dapat melihat ranking 10 besar di leaderboard
                    </p>
                </div>
                </p>
                </center>
                <a href='game.php' class='btn btn-primary btn-md'>Mulai Game</a>
                <p>Bukan Anda? <a href='logout.php'>(klik disini)</a></p>



            <?php
            }
        
        ?>
    
    
    </div>

    
  </body>
</html>