<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 13</title>
	
</head>
<body>
	<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        
    function ordenaNumeros($a,$b,$c) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      $arrayNumeros = array($a,$b,$c);
      asort($arrayNumeros);
      print_r(array_values($arrayNumeros));
    	
    	
	}

    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        
        echo "La lista de números ordenados es: ";
        echo ordenaNumeros($_POST['a'],$_POST['b'],$_POST['c']);
        
	}

    else {

	?>

    <h1>Introduzca tres números enteros</h1>
    <form action="T2Ejercicio13.php" method="POST">
        A: <input type="number" name="a"> B: <input type="number" name="b"> C: <input type="number" name="c"> 
        <input type="submit" value="Ordenar los números">
    </form>

    <?php
    }
    ?>
    
</body>
</html>