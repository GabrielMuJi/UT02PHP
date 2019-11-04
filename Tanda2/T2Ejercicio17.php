<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 17</title>
	
</head>
<body>
	<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        
    function primerNumero($numero) {
      $array  = array_map('intval', str_split($numero));
      echo $array[0];
    	
	}

    if (isset($_POST['numero'])) {
        
        echo "El primer número del número entero ".$_POST['numero']." es: ";
        echo primerNumero($_POST['numero']);
        
	}

    else {

	?>

    <h1>Introduzca un entero de hasta 5 cifras</h1>
    <form action="T2Ejercicio17.php" method="POST">
        Número: <input type="number" min="-99999" max="99999" name="numero">
        <input type="submit" value="Primer número">
    </form>

    <?php
    }
    ?>
    
</body>
</html>