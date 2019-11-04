<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T2Ejercicio6</title>
</head>
<body>
	<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
		if (isset($_POST['altura'])) {
			echo "Tarda en caer ", sqrt(2*($_POST['altura']/9.81)), " segundos";
		}

		else {

	?>
	Introduce la altura:
	<form action="T2Ejercicio6.php" method="post">
    	<input type="number" name="altura" />
    	<input type="submit" name="submit" value="Calcular tiempo" />
	<?php
	}
	?>

</body>
</html>