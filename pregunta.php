<?php
echo 	"<!DOCTYPE HTML>
			<html lang='es'>
				<head>";
	echo 			"<tiltle></title>
					<meta charset='UTF-8'/>
					<link rel='stylesheet' type='text/css' href='estilado.css'/>";
	echo		"</head>
				<body id='pregunta'>";
	echo 			"<form method='POST' action='principal.php'>";
		echo			"<h1 id='titulo'>Juguemos al ahorcado</h1>
						<h1 id='arri'>¿De verdad quieres morir hoy?</h1>";
						if(isset($_COOKIE['usuario'])&&isset($_COOKIE['tema']))
						{
							$nom=$_COOKIE['usuario'];
							$tema=$_COOKIE['tema'];
							echo "<h1 id='medarrio'>De acuerdo  ".$nom.". Te sugiero no escoger ".$tema." otra vez</h1>";
						}
						else
						{
		echo 			"<input id='medarri' name='nom' type='text' placeholder='Escribe el nombre de tu lápida' size='30'/>";
						}
		echo 			"<h1 id='medabaj'>Selecciona el tema del que desees apostar</h1><br/>
						<select id='abajiz' name='tema'>
							<option value='' selected>--Seleccionar--</option>
							<option value='comidas'>Comidas</option>
							<option value='calzado'>Calzado</option>
							<option value='animales'>Animales</option>
						</select>
						<input type='hidden' name='sigueIntentando' value='-1'/>
						<input type='submit' id='abajde' value='Establecer tema'>
					</form>";
	echo 		"</body>
			</html>";



?>