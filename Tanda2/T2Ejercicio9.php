<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 9</title>
	
</head>
<body>
	<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        
    function realizaEcuacion($a,$b,$c) {
        $a = $_POST['a'];
    	$b = $_POST['b'];
    	$c = $_POST['c'];
        
        $d = $b*$b - 4*$a*$c;

	    if($d < 0) {
	        echo "La ecuación no tiene soluciones reales";
	    } elseif($d == 0) {
	        echo "x = ";
	        echo (-$b / 2*$a);
	    } else  {
	        echo "x1 = ";
	        echo ((-$b + sqrt($d)) / (2*$a));
	        echo "<br>";
	        echo "x2 = ";
	        echo ((-$b - sqrt($d)) / (2*$a));
	    }
	}

    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        
        echo "Las dos soluciones de la ecuación anterior son </br>";
        echo realizaEcuacion($_POST['a'],$_POST['b'],$_POST['c']);
        
	}

    else {

	?>

    <h1>Introduzca tres números</h1>
    <form action="T2Ejercicio9.php" method="POST">
        A: <input type="number" name="a"> B: <input type="number" name="b"> C: <input type="number" name="c">
        <input type="submit" value="Resolver ecuaçao">
    </form>

    <?php
    }
    ?>
    
</body>
</html>