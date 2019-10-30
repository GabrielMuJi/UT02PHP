<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 10</title>
</head>
<body>

	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>

	Introduce la cantidad de Mb:
	<form action="T1Ejercicio10Parte2.php" method="post">
		<input type="number" name="megas" />
	    <input type="submit" name="submit" value="Calcular Kb" />
	</form>
</body>
</html>