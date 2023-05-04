<?php 

//Variables

$num=20;
echo "<br>Esta es una variable de numero: $num <br>";
var_dump($num);


$string="Texto";
echo "<br><br>Esta es una variable de Texto: $string <br>";
var_dump($string);

$bolean= true;
echo "<br><br>Esta es una variable bolean: $bolean <br>";
var_dump($bolean);


$frutas= array("Manzana", "pera");
echo "<br><br>Esta es una variable array: $frutas[1] <br>";
var_dump($frutas);

$colores = array('color1' => 'Azul', 'color2' => 'Rojo', 'color3' => 'verde');
echo "<br><br>Esta es una variable array: $colores[color1] <br>";
var_dump($colores);

$transporte= (object)['t1'=> 'automovil', 't2' => 'motocicleta', 't3' => 'Autobus'];
echo "<br><br>Esta es una variable object: $transporte->t1 <br>";
var_dump($transporte);


?>