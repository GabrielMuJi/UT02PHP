<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 8</title>
</head>
<body>
	
	<?php

		error_reporting(E_ERROR | E_WARNING | E_PARSE);

	?>

	Introduce las horas trabajadas:
	<form action="T1Ejercicio8Parte2.php" method="post">
    	<input type="number" name="horas" />
    	<input type="submit" name="submit" value="Calcular salario" />
    </form>
    
</body>
</html>