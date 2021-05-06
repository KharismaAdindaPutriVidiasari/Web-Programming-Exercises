<?php
$host = 'sql208.epizy.com';
$user = 'epiz_28551058';
$pass = '4fHwkhrBDaFiVZG';
$db = 'epiz_28551058_game';



function score ($host, $user, $pass, $db, $nama, $skor){
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    $query = "INSERT INTO score_ranking (nama, skor) VALUES ('$nama', '$skor')";
    $result = (mysqli_query($mysqli, $query));
    mysqli_close($mysqli);
}

function ranking ($host, $user, $pass, $db){
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    $query = "SELECT * FROM score_ranking ORDER BY skor DESC LIMIT 10";
    $index = 1;
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) > 0) {

        ?>
        
        <table border='1' class="table table-warning table-bordered border-dark caption-top">
        <tr class='table-dark'>
        <th>No.</th>
        <th>Nama Player</th>
        <th>Score</th>
        </tr>
    
        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td>$index</td>";
            echo"<td>{$row['nama']}</td>";
            echo"<td>{$row['skor']}</td>";
            $index++;
        }
    
        
        ?>
        
        </table>
        <?php
    }
    mysqli_close($mysqli);
}

?>