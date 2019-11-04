<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 10</title>
</head>
<body>
	<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
		if (isset($_POST['mes']) && isset($_POST['dia'])) {

			if ($_POST['mes'] == 1) {

				if ($_POST['dia'] <=20) {
					echo "Eres capricornio";
				}
				else {
					echo "Eres acuario";
				}
			}
			elseif ($_POST['mes'] == 2) {

				if ($_POST['dia'] <=19) {
					echo "Eres acuario";
				}
				else {
					echo "Eres piscis";
				}
			}
			elseif ($_POST['mes'] == 3) {

				if ($_POST['dia'] <=20) {
					echo "Eres piscis";
				}
				else {
					echo "Eres aries";
				}
			}
			elseif ($_POST['mes'] == 4) {

				if ($_POST['dia'] <=20) {
					echo "Eres aries";
				}
				else {
					echo "Eres tauro";
				}
			}
			elseif ($_POST['mes'] == 5) {

				if ($_POST['dia'] <=21) {
					echo "Eres tauro";
				}
				else {
					echo "Eres géminis";
				}
			}
			elseif ($_POST['mes'] == 6) {

				if ($_POST['dia'] <=21) {
					echo "Eres géminis";
				}
				else {
					echo "Eres cáncer";
				}
			}
			elseif ($_POST['mes'] == 7) {

				if ($_POST['dia'] <=23) {
					echo "Eres cáncer";
				}
				else {
					echo "Eres leo";
				}
			}
			elseif ($_POST['mes'] == 8) {

				if ($_POST['dia'] <=23) {
					echo "Eres leo";
				}
				else {
					echo "Eres virgo";
				}
			}
			elseif ($_POST['mes'] == 9) {

				if ($_POST['dia'] <=23) {
					echo "Eres virgo";
				}
				else {
					echo "Eres libra";
				}
			}
			elseif ($_POST['mes'] == 10) {

				if ($_POST['dia'] <=23) {
					echo "Eres libra";
				}
				else {
					echo "Eres escorpio";
				}
			}
			elseif ($_POST['mes'] == 11) {

				if ($_POST['dia'] <=22) {
					echo "Eres escorpio";
				}
				else {
					echo "Eres sagitario";
				}
			}
			else {
				if ($_POST['dia'] <=21) {
					echo "Eres sagitario";
				}
				else {
					echo "Eres capricornio";
				}
			}
		}

		else {
	?>
	
	<form action="T2Ejercicio10.php" method="post">
	Introduce tu mes de nacimiento: <input type="number" name="mes" /> Introduce tu día de nacimiento: <input type="number" name="dia"><br/>
   	<input type="submit" name="submit" value="Horóscopo" />

	<?php
	}
	?>

</body>
</html>