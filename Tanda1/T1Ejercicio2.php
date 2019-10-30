<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>

	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>

	Introduce los euros a convertir: </br>
		<form action="T1Ejercicio2Parte2.php" method="post">
    	<input type="number" name="euros" />
    	<input type="submit" name="submit" value="Calcular pesetas" />
	</form>
</body>
</html>