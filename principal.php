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
	$palabraUsu=str_split($palabraUsu);
	for ($alfa=0; $alfa < count($palabraUsu); $alfa++)
		unset($palabraUsu[$alfa]);
	$palabraUsu=implode($palabraUsu);
	for ($alfa=0; $alfa < strlen($opcion); $alfa++)
		$palabraUsu[$alfa]="_";
	//iniciacion del contador
<<<<<<< HEAD
	$sigueIntentando=6;
=======

	$sigueIntentando=0;
>>>>>>> c906c3e91bdd0f3ccdd5d91ad07d13baca0ebdef
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
		$miniError++;//miniError sirve para llevar  el control de que no encaje con ninguna letra la letra puesta
}
//lleva la cuenta de errores
if ($miniError==strlen($opcion)) {
	$sigueIntentando--;
}
//evita un error que si soy sincero no se donde esta
if (is_array($palabraUsu))
	$palabraUsu=implode($palabraUsu);

<<<<<<< HEAD
//todo lo demas
=======
echo $palabraUsu;


>>>>>>> c906c3e91bdd0f3ccdd5d91ad07d13baca0ebdef
echo 	"<!DOCTYPE HTML>
			<html lang='es'>
				<head>";
	echo 			"<tiltle></title>
					<meta charset='UTF-8'/>
					<link rel='stylesheet' type='text/css' href='estilado.css'/>";
	echo		"</head>
				<body>
					<h2>".$palabraUsu."</h2>
					<form method='POST' action='principal.php'>

					  <input type='hidden' name='sigueIntentando' value='".$sigueIntentando."'/>
					  <input type='hidden' name='tema' value='".$opcion."'/>
					  <input type='hidden' name='palabra' value='".$palabraUsu."'/>
					  <input type='text' name='letra'/>
					  <input type='submit'/>
					  <form/>";

	echo 			"<br/>".$opcion."<br/>".$sigueIntentando;
	echo 			"<br/><a href='pregunta.php'>regresa<a/>";
	//pa ver si ya le atino
	if ($palabraUsu==$opcion) {
echo 				"<br/><div><a href='pregunta.php'>lo lograste</a></div>";
	}
	echo 		"</body>
			</html>";

?>
