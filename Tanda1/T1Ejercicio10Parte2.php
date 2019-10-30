<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 10</title>
</head>
<body>
	
	<?php 
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		echo $_POST["megas"], " Mb son ",$_POST["megas"] * 1024, " Kb</br>";
		echo "<a href=T1Ejercicio10.php>Volver</a>";
	 ?>
</body>
</html>