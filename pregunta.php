<?php
echo 	"<!DOCTYPE HTML>
			<html lang='es'>
				<head>";
	echo 			"<tiltle></title>
					<meta charset='UTF-8'/>
					<link rel='stylesheet' type='text/css' href='estilado.css'/>";
	echo		"</head>
				<body>";
	echo 			"<form method='POST' action='principal.php'>
						<h1>Selecciona el tema del que desees adivinar</h1><br/>
						<select name='tema'>
							<option value='' selected>--Seleccionar--</option>
							<option value='comidas'>Comidas</option>
							<option value='calzado'>Calzado</option>
							<option value='animales'>Animales</option>
						</select>
						<input type='submit' value='Establecer tema'>
					</form>";
	echo 		"</body>
			</html>";



?>