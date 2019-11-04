<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>T2Ejercicio1</title>
</head>
<body>

	<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

		if (isset($_POST["dia"])) {
    		
			$dia = $_POST["dia"];

			switch ($dia) {
			    case "Lunes":
			        echo "A primera hora hay DWES </br>";
			        break;
			    case "Martes":
			        echo "A primera hora hay EIE </br>";
			        break;
			    case "Miercoles":
			        echo "A primera hora hay DIW </br>";
			        break;
			    case "Jueves":
			        echo "A primera hora hay DIW </br>";
			        break;
			    case "Viernes":
			        echo "A primera hora hay DWES </br>";
			        break;
			    default:
			     	echo "No has introducido un día correcto </br>";
			}

    		echo "<a href=T2Ejercicio1.php>Volver</a>";    
		} 

		else {    
    
	?>
	
	Por favor, introduzca el día de la semana </br>
	<form action="T2Ejercicio1.php" method="post">
  		<input type="text" name="dia">
    	<input type="submit" name="submit" value="Asignatura">
	</form>

	<?php
		}
	?>

	
</body>
</html>