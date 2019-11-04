<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 12</title>
</head>
<body>
	<?php 

    error_reporting(E_ERROR | E_WARNING | E_PARSE);

	if (isset($_POST)) {
		$puntos=0;
		foreach($_POST as $respuesta) {
            $puntos += $respuesta;
        }
    	echo "Has obtenido ",$puntos," de 10";
    	}
    else {
    ?>

    	<h1>Test de conocimientos DAW2</h1>
    	<form action="T2Ejercicio12.php" method="post">
    	<li>
    	¿El color existe? <br>
        	<input type="radio" name="p1" value="1"> No <br>
        	<input type="radio" name="p1" value="0"> Sí <br>
        	<input type="radio" name="p1" value="0"> Depende del día de la semana <br>
        </li>
        <li>
    	¿Qué color se obtiene de la mezcla de los colores primarios en el sistema aditivo? <br>
        	<input type="radio" name="p2" value="1"> Blanco <br>
        	<input type="radio" name="p2" value="0"> Negro <br>
        	<input type="radio" name="p2" value="0"> Rojo <br>
        </li>
        <li>
    	¿Qué comando utilizarías para volver a la comprobación de una iteración? <br>
        	<input type="radio" name="p3" value="1"> continue <br>
        	<input type="radio" name="p3" value="0"> break <br>
        	<input type="radio" name="p3" value="0"> reset <br>
        </li>
        <li>
    	¿Qué significan las siglas WAMP? <br>
        	<input type="radio" name="p4" value="0"> Windows, Apache, Microsoft, PHP/Perl/Python <br>
        	<input type="radio" name="p4" value="0"> Winamp, Apache, MySQL, PHP/Perl/Python <br>
        	<input type="radio" name="p4" value="1"> Windows, Apache, MySQL, PHP/Perl/Python <br>
        </li>
        <li>
    	¿Cómo seleccionamos a los objetos de la clase principal en CSS? <br>
        	<input type="radio" name="p5" value="0"> #principal <br>
        	<input type="radio" name="p5" value="1"> .principal <br>
        	<input type="radio" name="p5" value="0"> $principal <br>
        </li>
        <li>
        ¿Qué debemos cambiar si queremos que nuestro servidor escuche por otro puerto? <br>
        	<input type="radio" name="p6" value="1"> listen nºpuerto <br>
        	<input type="radio" name="p6" value="0"> hear nºpuerto <br>
        	<input type="radio" name="p6" value="0"> accept nºpuerto <br>
        </li>
        <li>
        ¿Si usamos DOM.getElementById, que estamos obteniendo? <br>
        	<input type="radio" name="p7" value="0"> los elementos de una clase concreta <br>
        	<input type="radio" name="p7" value="1"> un elemento de un ID concreto <br>
        	<input type="radio" name="p7" value="0"> todo el documento <br>
        </li>
        <li>
        ¿Cuál de estos no es un tipo de servidor? <br>
        	<input type="radio" name="p8" value="0"> De impresión <br>
        	<input type="radio" name="p8" value="0"> Web <br>
        	<input type="radio" name="p8" value="1"> De diseño <br>
        </li>
        <li>
        ¿En PHP, podemos crear arrays vacíos? <br>
        	<input type="radio" name="p9" value="1"> Sí <br>
        	<input type="radio" name="p9" value="0"> No <br>
        	<input type="radio" name="p9" value="0"> Sólo si justo después lo rellenamos con algo. <br>
        </li>
        <li>
        ¿Qué debemos utilizar para recuperar la información de un repositorio GIT que ya tenemos clonado? <br>
        	<input type="radio" name="p10" value="0"> push <br>
        	<input type="radio" name="p10" value="1"> pull <br>
        	<input type="radio" name="p10" value="0"> clone <br>
        </li>
        <input type="submit" name="submit" value="Terminar test"> 

    <?php 
    } 
    ?>
    
</body>
</html>