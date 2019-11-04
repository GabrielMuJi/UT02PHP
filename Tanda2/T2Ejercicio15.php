<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 15</title>
	
</head>
<body>
	<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        
    if (!empty($_POST)) {
        
        $puntos = 0;

          foreach($_POST as $respuesta) {
            $puntos += $respuesta;
          }

          if ( $puntos <= 10 ) {
            echo "¡Enhorabuena! Tu pareja parece ser totalmente fiel.";
          }

          if ( ($puntos > 11 ) && ($puntos <= 22) ) {
            echo "Quizás exista el peligro de otra persona en su vida o en su mente, ";
            echo "aunque seguramente será algo sin importancia. No bajes la guardia.";
          }

          if ( $puntos >= 22 ) {
            echo "Tu pareja tiene todos los ingredientes de estar viviendo un ";
            echo "romance con otra persona. Te aconsejamos que indagues un poco más ";
            echo "y averigües qué es lo que está pasando por su cabeza.";
          }
        
	}

    else {

	?>

    <h1>¿Tu pareja te es fiel?</h1>
    <form action="T2Ejercicio15.php" method="post">
          <ol>
            <li>
              Tu pareja parece estar más inquieta de lo normal sin ningún motivo
              aparente.<br>
              <input type="radio" name="r1" value="3">Verdadero<br>
              <input type="radio" name="r1" value="0">Falso<br>
            </li>
            <li>
              Ha aumentado sus gastos de vestuario.<br>
              <input type="radio" name="r2" value="3">Verdadero<br>
              <input type="radio" name="r2" value="0">Falso<br>
            </li>
            <li>
              Ha perdido el interés que mostraba anteriormente por ti.<br>
              <input type="radio" name="r3" value="3">Verdadero<br>
              <input type="radio" name="r3" value="0">Falso<br>
            </li>
            <li>
              Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer).<br>
              <input type="radio" name="r4" value="3">Verdadero<br>
              <input type="radio" name="r4" value="0">Falso<br>
            </li>
            <li>
              No te deja que mires la agenda de su teléfono móvil.<br>
              <input type="radio" name="r5" value="3">Verdadero<br>
              <input type="radio" name="r5" value="0">Falso<br>
            </li>
            <li>
              A veces tiene llamadas que dice no querer contestar cuando estás tú delante.<br>
              <input type="radio" name="r6" value="3">Verdadero<br>
              <input type="radio" name="r6" value="0">Falso<br>
            </li>
            <li>
              Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a.<br>
              <input type="radio" name="r7" value="3">Verdadero<br>
              <input type="radio" name="r7" value="0">Falso<br>
            </li>
            <li>
              Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo.<br>
              <input type="radio" name="r8" value="3">Verdadero<br>
              <input type="radio" name="r8" value="0">Falso<br>
            </li>
            <li>
              Has notado que últimamente se perfuma más.<br>
              <input type="radio" name="r9" value="3">Verdadero<br>
              <input type="radio" name="r9" value="0">Falso<br>
            </li>
            <li>
              Se confunde y te dice que ha estado en sitios donde no ha ido contigo.<br>
              <input type="radio" name="r10" value="3">Verdadero<br>
              <input type="radio" name="r10" value="0">Falso<br>
            </li>
          </ol>
          <input type="submit" value="¿Me engaña mi pareja?">
        </form>

    <?php
    }
    ?>
    
</body>
</html>