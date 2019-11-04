<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
   <?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
      
        function calculaMedia($a,$b,$c) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            $resultado = ($a+$b+$c)/3;
            return $resultado;
        }


        if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
            $resultado = calculaMedia($_POST['a'],$_POST['b'],$_POST['c']);
            if ($resultado < 5) {
                echo "El resultado de la media de las tres notas es ", $resultado , " (insuficiente)";
            }
            elseif ($resultado >= 5 && $resultado < 6) {
                echo "El resultado de la media de las tres notas es ",$resultado , " (suficiente)";
            }
            elseif ($resultado >= 6 && $resultado < 7) {
                echo "El resultado de la media de las tres notas es ",$resultado , " (bien)";
            }
            elseif ($resultado >= 7 && $resultado < 9) {
                echo "El resultado de la media de las tres notas es ",$resultado , " (notable)";
            }
            else {
                echo "El resultado de la media de las tres notas es ",$resultado , " (sobresaliente)";
            }
        }

    else {

    ?>

    <h1>Introduzca las tres notas</h1>
    <form action="T2Ejercicio8.php" method="POST">
        1era nota: <input type="number" name="a"> 2da nota: <input type="number" name="b"> 3era nota: <input type="number" name="c">
        <input type="submit" value="Calcular media">
    </form>

    <?php
    }
    ?> 
</body>
</html>