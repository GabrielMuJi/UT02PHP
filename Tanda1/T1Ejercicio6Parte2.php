<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 6</title>
</head>
<body>
	<?php 

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

		echo "El área es ", ($_POST["base"] * $_POST["altura"])/2,"</br>";
		echo "<a href=T1Ejercicio6.php>Volver</a>";
		
	 ?>
</body>
</html>