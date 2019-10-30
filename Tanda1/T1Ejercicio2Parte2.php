<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>

	<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
		echo $_POST["euros"], " euros son ", $_POST["euros"] * 166.386, " pesetas</br>";
		echo "<a href=T1Ejercicio2.php>Volver</a>";

	?>
	
</body>
</html>