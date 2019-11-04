<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 14</title>
</head>
<body>
	<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		if (isset($_POST['numero'])) {

			if ($_POST['numero'] %2 == 0 && $_POST['numero'] %5 == 0) {
				echo "Es par y divisible entre 5";
			}
			elseif ($_POST['numero'] %2 != 0 && $_POST['numero'] %5 == 0) {
				echo "Es impar y divisible entre 5";
			}
			elseif ($_POST['numero'] %2 != 0 && $_POST['numero'] %5 != 0) {
				echo "Es impar y no es divisible entre 5";
			}
			else {
				echo "Es par y no es divisible entre 5";
			}
		}
		else {
	?>
	
	<form action="T2Ejercicio14.php" method="post">
    	Introduce un número:<input type="number" name="numero" />
    	<input type="submit" name="submit" value="Calcula" />

	<?php 
	}
	?>
	
</body>
</html>