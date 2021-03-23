<html>
	<head>Headings</head>
	<body>
	<?php
		$baris = 4; 
		$kolom = 5; 
		echo "<table border='1'>";
		for($i =1; $i < ($kolom*$baris); $i+=4){
	 		echo "<tr>";
	 		for ($j = 0; $j < $baris; $j++){
	 			$x = $i+$j;
	 			if ($x%2==0){
	 				echo "<td bgcolor=red ; style= 'white'>".$x."</td>";
	 			} else{
	 				echo "<td bgcolor=white ; style='red'>".$x."</td>";
	 			}
	 		}
	  		echo "</tr>";
		}
		echo "</table>";
	?>
	</body>
</html>