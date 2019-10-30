<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
</head>
<body>

	<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		echo $_POST["pesetas"], " pesetas son ", $_POST["pesetas"] / 166.386, " euros</br>";
		echo "<a href=T1Ejercicio3.php>Volver</a>";

	?>
	
</body>
</html>