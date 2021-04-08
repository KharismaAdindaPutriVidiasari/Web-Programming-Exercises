<!DOCTYPE html>
<html>
<body>

<?php  
function mStar($n){
    echo "<pre>";
   for($i=0; $i<=$n; $i++){
       for($j=$n-$i; $j>0; $j--){
            echo "*";
       }
        echo "\n";
   }
    echo "</pre>";
}

mStar(4);
mStar(5);

?>  

</body>
</html>