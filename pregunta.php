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
						<h1 id='arri'>¿De verdad quieres morir hoy?</h1>
						
						<input id='medmed' name='nom' type='text' placeholder='Escribe el nombre de tu lápida' size='30'/>
						<h1 id='med'>Selecciona el tema del que desees adivinar</h1><br/>
						<select id='enlado' name='tema'>
							<option value='' selected>--Seleccionar--</option>
							<option value='comidas'>Comidas</option>
							<option value='calzado'>Calzado</option>
							<option value='animales'>Animales</option>
						</select>
						<input type='hidden' name='sigueIntentando' value='-1'/>
						<input type='submit' id='enmed' value='Establecer tema'>
					</form>";
	echo 		"</body>
			</html>";



?>