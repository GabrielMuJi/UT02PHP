<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4</title>
</head>
<body>
	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>

	Introduce 2 números:
	<form action="T1Ejercicio4Parte2.php" method="post">
    	<input type="number" name="numero1" />
    	<input type="number" name="numero2" />
    	<input type="submit" name="submit" value="Calcular" />
</body>
</html>