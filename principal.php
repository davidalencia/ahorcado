<?php
include('funciones.php');
include('palabras.php');

$opcion=datos('tema');
$sigueIntentando=datos('sigueIntentando');
$letra=datos('letra');

if ($sigueIntentando=='-1') {
	if ($opcion=='animales')
		$opcion=azar($animales);
	elseif ($opcion=='calzado')
		$opcion=azar($calzado);
	else
		$opcion=azar($comida);

	$sigueIntentando=0;
}

$opcion=strtoupper($opcion);
$letra=strtoupper($letra);
$si=false;

for ($alfa=0; $alfa < strlen($opcion); $alfa++) {
	if ($opcion[$alfa]==$letra) {
			$si=true;
	}
	if ($si==true) {
		echo $opcion[$alfa];
		$si=false;
	}
	else {
		echo "_";
		$si=false;
	}
}

$sigueIntentando++;

echo 	"<!DOCTYPE HTML>
			<html lang='es'>
				<head>";
	echo 			"<tiltle></title>
					<meta charset='UTF-8'/>
					<link rel='stylesheet' type='text/css' href='estilado.css'/>";
	echo		"</head>
				<body>
					<form method='POST' action='principal.php'>
					<input type='hidden' name='sigueIntentando' value='".$sigueIntentando."'/>
					<input type='hidden' name='tema' value='".$opcion."'/>
					<input type='text' name='letra'/>
					<input type='submit'/>
					<form/>";
	echo 			"<br/>".$opcion."<br/>".$sigueIntentando;
	echo 			"<br/><a href='pregunta.php'>regresa<a/>";
	echo 		"</body>
			</html>";

?>
