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
$miniError=0;

//codigo que se inicia cuando entra por primera vez
echo "<h1>".$sigueIntentando."</h1></br>";
if($sigueIntentando==-1)
{
	$b=6;
	$bg='error'.$b;
}
echo "<h1>".$b."</h1>";
for($a=5;$a>=0;$a--)
{
	
	if($sigueIntentando==$a)
	{
		$b=$a;
		
		$bg='error'.$b;
	}
	
}
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
	$sigueIntentando=6;
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

//todo lo demas
echo 	"<!DOCTYPE HTML>
			<html lang='es'>
				<head>";
	echo 			"<tiltle></title>
					<meta charset='UTF-8'/>
					<link rel='stylesheet' type='text/css' href='estilado.css'/>";
	echo		"</head>
				<body id='".$bg."'>
					<h2 id='abajo'>".$palabraUsu."   ".$bg."</h2> ".$sigueIntentando;
	echo 			"<form method='POST' action='principal.php'>

					  <input type='hidden' name='sigueIntentando' value='".$sigueIntentando."'/>
					  <input type='hidden' name='tema' value='".$opcion."'/>
					  <input type='hidden' name='palabra' value='".$palabraUsu."'/>
					  <input id='abenlado' type='text' name='letra'/>
					  <input id='abenmed' type='submit' value='¡¡¡APUESTA TU VIDA!!!'/>
					  
					  <form/>";

	
	echo 			"<br/><a id='ababenmed'href='pregunta.php'>Escoge otro tema<a/>";
	//pa ver si ya le atino
	if ($palabraUsu==$opcion) {
echo 				"<br/><div><a id='ababenlado' href='pregunta.php'>Juega de nuevo</a></div>";
	}
	echo 		"</body>
			</html>";

?>
