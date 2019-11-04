<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 19</title>
	
</head>
<body>
	<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        
    function esCapicua($numero) {
	    $numero = $_POST['numero'];
	    $esCapicua = false;
	    $array  = array_map('intval', str_split($numero));
	    if (count($array)==5) {
	    	if ($array[0]==$array[4] && $array[1]==$array[3]) $esCapicua = true;
	    }
	    elseif (count($array)==4) {
	    	if ($array[0]==$array[3] && $array[1]==$array[2]) $esCapicua = true;
	    }
	    elseif (count($array)==3) {
	    	if ($array[0]==$array[2]) $esCapicua = true;
	    }
	    elseif (count($array)==2) {
	    	if ($array[0]==$array[1]) $esCapicua = true;
	    }
	    elseif (count($array)==1) {
	    	$esCapicua = true;
	    }
	    if ($esCapicua==true) echo "Sí es capicúa";
	    else echo "No es capicúa";
	}

    if (isset($_POST['numero'])) {
        
        echo "El número ".$_POST['numero']." es capicúa?: ";
        echo esCapicua($_POST['numero']);
        
	}

    else {

	?>

    <h1>Introduzca un positivo de hasta 5 cifras</h1>
    <form action="T2Ejercicio19.php" method="POST">
        Número: <input type="number" min="0" max="99999" name="numero">
        <input type="submit" value="¿Capicúa?">
    </form>

    <?php
    }
    ?>
         
</body>
</html>