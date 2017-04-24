<?php
include('funciones.php');
include('palabras.php');

$opcion=datos('tema');


echo 	"<!DOCTYPE HTML>
			<html lang='es'>
				<head>";
	echo 			"<tiltle></title>
					<meta charset='UTF-8'/>
					<link rel='stylesheet' type='text/css' href='estilado.css'/>";
	echo		"</head>
				<body>";
if ($opcion=='animales')
	echo "<br/>".azar($animales)."<br/>";
elseif ($opcion=='calzado') 
	echo "<br/>".azar($calzado)."<br/>";
else
	echo "<br/>".azar($comida)."<br/>";
	echo 			"";
	echo 		"</body>
			</html>";

?>
