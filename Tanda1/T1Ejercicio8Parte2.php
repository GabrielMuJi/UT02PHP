<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 8</title>
</head>
<body>
	<?php 
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		echo "Gana ", $_POST["horas"] * 12, " euros a la semana</br>";
		echo "<a href=T1Ejercicio8.php>Volver</a>";
	 ?>
</body>
</html>