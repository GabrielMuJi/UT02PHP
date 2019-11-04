<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T2Ejercicio4</title>
</head>
<body>

	<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		if (isset($_POST['horas'])) {

			if ($_POST['horas'] <= 40) {
				echo "Gana ", $_POST["horas"] * 12, " euros a la semana";
			}
			else {
				echo "Gana ", (40*12) + (($_POST['horas']-40)*16), " euros a la semana";
			}
		}

		else {
	?>

	Introduce las horas trabajadas:
	<form action="T2Ejercicio4.php" method="post">
    	<input type="number" name="horas" />
    	<input type="submit" name="submit" value="Calcular salario" />
    	
	<?php 
	} 
	?>

</body>
</html>