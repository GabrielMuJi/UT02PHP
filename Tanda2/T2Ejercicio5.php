<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>
	
</head>
<body>
	<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        
    function resuelveEcuacion($a,$b) {
        $a = $_POST['a'];
    	$b = $_POST['b'];
        $resultado = -$b/$a;
        return $resultado;
    }

    if (isset($_POST['a']) && isset($_POST['b'])) {
        
        if($_POST['a']!=0)
        echo "El resultado de la ecuación ".$_POST['a']."x + ".$_POST['b']." = 0 es <b>".resuelveEcuacion($_POST['a'],$_POST['b'])."</b>";
    	else echo "La ecuación no tiene solución real";
        
	}

    else {

	?>

    <h1>Introduzca dos números</h1>
    <form action="T2Ejercicio5.php" method="POST">
        A: <input type="number" name="a"> B: <input type="number" name="b">
        <input type="submit" value="Realizar ecuaçao">
    </form>

    <?php
    }
    ?>
    
</body>
</html>