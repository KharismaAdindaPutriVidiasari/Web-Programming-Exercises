<html>
	<head>Headings</head>
	<body>
	<?php
		$baris = 4; 
		$kolom = 5; 
		echo "<table border='1'>";
		for($i =0; $i < 5; $i++){
	 		echo "<tr>";
	 		for ($j = 0; $j < 4; $j++){
	 			echo "<td>Hello</td>";
	 		}
	  		echo "</tr>";
		}
		echo "</table>";
	?>
	</body>
</html>