<!DOCTYPE html>
<html>
<body>

<?php  
function htngGaji($gol, $masaKerja){
    if ($gol == "A"){
         if ($masaKerja < 10) {
            $gaji = 5000000;
         } else {
             $gaji = 7000000;
         }
    } else if ($gol == "B"){
            if ($masaKerja < 10) {
                $gaji = 6000000;
             } else {
                 $gaji = 8000000;
             }
         }
return $gaji;
}
echo htngGaji("A", 5);
echo "<br>";
echo htngGaji("A", 10);
echo "<br>";
echo htngGaji("B", 5);
echo "<br> ";
echo htngGaji("B", 10);
?>  

</body>
</html>