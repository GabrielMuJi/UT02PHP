<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4</title>
</head>
<body>
	
	<?php 
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		
		echo $_POST["numero1"], " + ", $_POST["numero2"], " = ", $_POST["numero1"] + $_POST["numero2"],"</br>";
		echo $_POST["numero1"], " - ", $_POST["numero2"], " = ", $_POST["numero1"] - $_POST["numero2"],"</br>";
		echo $_POST["numero1"], " x ", $_POST["numero2"], " = ", $_POST["numero1"] * $_POST["numero2"],"</br>";
		echo $_POST["numero1"], " ÷ ", $_POST["numero2"], " = ", $_POST["numero1"] / $_POST["numero2"],"</br>";
		echo "<a href=T1Ejercicio4.php>Volver</a>";
	 ?>
</body>
</html>