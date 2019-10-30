<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
</head>
<body>

	<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>

	Por favor, introduzca el número de pesetas: </br>
	<form action="T1Ejercicio3Parte2.php" method="post">
    	<input type="number" name="pesetas" />
    	<input type="submit" name="submit" value="Calcular euros" />
	</form>
	
</body>
</html>