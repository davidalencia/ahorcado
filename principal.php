<?php
include('funciones.php');
include('palabras.php');

//declaración de variables
$opcion=datos('tema');
$sigueIntentando=datos('sigueIntentando');
$letra=datos('letra');

$palabraUsu=datos('palabra');
$letra=strtoupper($letra);
$si=false;
$palabra =array();


//codigo que se inicia cuando entra por primera vez
if ($sigueIntentando=='-1') {
	//eleccion de categoria
	if ($opcion=='animales')
		$opcion=azar($animales);
	elseif ($opcion=='calzado')
		$opcion=azar($calzado);
	else
		$opcion=azar($comida);

	//destrucción y creación de palabraUsu
	for ($alfa=0; $alfa < count($palabraUsu); $alfa++) {
		$palabraUsu=str_split($palabraUsu);
		unset($palabraUsu[$alfa]);
		$palabraUsu=implode($palabraUsu);
		echo "va una ";
	}
	for ($alfa=0; $alfa < strlen($opcion); $alfa++)
		$palabraUsu[$alfa]="_";
	//iniciacion del contador

	$sigueIntentando=0;
}
//pasa a mayusculas la opcion dada por el usuario
$opcion=strtoupper($opcion);
//compara y pone la letras correctas
for ($alfa=0; $alfa < strlen($opcion); $alfa++) {
	if ($opcion[$alfa]==$letra) {
			$si=true;
	}
	if ($si==true) {
		$palabraUsu[$alfa] =$opcion[$alfa];
		$si=false;
	}
	else
		$miniError++;
}

if ($miniError==strlen($opcion)) {
	$sigueIntentando++;
}

if (is_array($palabraUsu))
	$palabraUsu=implode($palabraUsu);

echo $palabraUsu;


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
					  <input type='hidden' name='palabra' value='".$palabraUsu."'/>
					  <input type='text' name='letra'/>
					  <input type='submit'/>
					  <form/>";

	echo 			"<br/>".$opcion."<br/>".$sigueIntentando;
	echo 			"<br/><a href='pregunta.php'>regresa<a/>";
	echo 		"</body>
			</html>";

?>
