<!DOCTYPE html>
<html>
<body>

<?php  
function mStar($n){
    echo "<pre>";
   for($i=0; $i<=$n; $i++){
       for($j=0; $j<$i; $j++){
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