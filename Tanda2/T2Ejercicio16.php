<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 16</title>
</head>
<body>
	<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);


	function ultimoNumero($numero) {
    	$numero = $_POST['numero'];
      	$array  = array_map('intval', str_split($numero));
      	return $array[sizeof($array)-1];
  	}

		if (isset($_POST['numero'])) {

	      echo "El último dígito es ", ultimoNumero($_POST['numero']);
		
		}

		else {

	?>
	
	<form action="T2Ejercicio16.php" method="post">
    	Introduce un número:<input type="number" name="numero" />
    	<input type="submit" name="submit" value="Último número" />

	<?php 
	} 
	?>

</body>
</html>