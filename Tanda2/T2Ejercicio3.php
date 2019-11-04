<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
	
</head>
<body>
	<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        
    function obtenerDia($numero) {
            $numero = $_POST['numero'];
            switch ($numero) {
                case 1:
                    $dia = "Lunes";
                    break;
                case 2:
                    $dia = "Martes";
                    break;
                case 3:
                    $dia = "Miércoles";
                    break;
                case 4:
                    $dia = "Jueves";
                    break;
                case 5:
                    $dia = "Viernes";
                    break;     
                case 6:
                    $dia = "Sábado";
                    break;
                case 7:
                    $dia = "Domingo";
                    break;
                default:
                    $dia = "no válido";
                    break;
            }
        return $dia;
    }

    if (isset($_POST['numero'])) {
        
        echo "El día de la semana es ".obtenerDia($_POST['numero']);
        
	}

    else {

	?>

    <h1>Introduzca un número del 1 al 7</h1>
    <form action="T2Ejercicio3.php" method="POST">
        <input type="number" name="numero">
        <input type="submit" value="Comprobar día">
    </form>

    <?php
    }
    ?>
    
</body>
</html>