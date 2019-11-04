<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 11</title>
	
</head>
<body>
	<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        
    function calculaMedianoche($horas,$minutos) {
        $horas = $_POST['horas'];
    	$minutos = $_POST['minutos'];
    	$fallo = false;
    	if ($horas<24) {
    		$horasMedianoche = 24-$horas-1;
    	}
    	elseif ($horas==24) {
    		$horasMedianoche = 0;
    	}
    	else { 
    		$fallo=true;
   		}
   		if ($minutos>60 OR $minutos<0) {
   			$fallo=true;
   		}
   		else {
   			$minutosMedianoche = 60-$minutos;
   		}
   		if ($fallo==false){
    		echo $horasMedianoche.":".$minutosMedianoche;
		}
		else {
			echo "Hora no válida";
		}
    	
	}

    if (isset($_POST['horas']) && isset($_POST['minutos'])) {
        
        echo "El tiempo que queda hasta media noche es: ";
        echo calculaMedianoche($_POST['horas'],$_POST['minutos']);
        
	}

    else {

	?>

    <h1>Introduzca la hora y los minutos</h1>
    <form action="T2Ejercicio11.php" method="POST">
        Horas: <input type="number" name="horas"> Minutos: <input type="number" name="minutos">
        <input type="submit" value="Tiempo hasta la medianoche">
    </form>

    <?php
    }
    ?>
    
</body>
</html>