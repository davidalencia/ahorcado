<?php
//devuelve una palabra al azar ademas de retirarla
//cambiando el # de indoces en el array
function azar(&$array){
  $largo=count($array);
  $n=rand(0,$largo-1);
  $tmp=$array[$n];

  for ($alfa=$n; $alfa < $largo-2; $alfa++)
    $array[$alfa]=$array[$alfa+1];

  unset($array[$largo-1]);
  return $tmp;
}

function datos ($nombre){
	return $_POST[$nombre];
}

?>
