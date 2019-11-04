<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T2Ejercicio2</title>
</head>
<body>

	<?php 

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		if (isset($_POST['a'])) {

			if ($_POST['a'] >= 6 && $_POST['a'] <= 12) {
				echo "Buenos días";
			}
			elseif ($_POST['a'] >= 13 && $_POST['a'] <= 20) {
				echo "Buenas tardes";
				}
			else {
				echo "Buenas noches";
			}
		}

		else {

	?>

	<form action="T2Ejercicio2.php" method="post">
		Hora: <input type="number" name="a" min="0" max="24">
		<input type="submit" value="Saludo">
	</form>

	<?php 
	}
 	?>

</body>
</html>