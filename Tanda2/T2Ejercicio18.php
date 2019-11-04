<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 18</title>
</head>
<body>
	<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	function numeroDigitos($numero) {
	    $numero = $_POST['numero'];
	    $array  = array_map('intval', str_split($numero));
	    return sizeof($array);
	}

		if (isset($_POST['numero'])) {

			elseif ($_POST['numero'] <10 && $_POST['numero'] > -10){
				echo "El número tiene una cifra";
			}
			elseif ($_POST['numero'] < 0) {
			  	echo "El número tiene ",numeroDigitos($_POST['numero'])-1, " cifras.";
			}
			else {
			  	echo "El número tiene ",numeroDigitos($_POST['numero']), " cifras.";
			}
		}

		else {
	?>
	
	<form action="T2Ejercicio18.php" method="post">
    	Introduce un número de hasta cinco cifras:<input type="number" name="numero" min="-99999" max="99999"/>
    	<input type="submit" name="submit" value="Calcular" />

	<?php
	}
	?>

</body>
</html>