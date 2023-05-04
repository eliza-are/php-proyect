<?php 

#Condiciones

$x=8;
$y=10

if ($x > $y) {
	echo "X es Mayor que Y<br>";
}
elseif ($x == $y) {
	echo "X es igual que Y<br>";
}
else{
	echo "X es menor que Y<br>";
}

$dia='sabado';

switch ($dia) {
	case 'sabado':
		echo "Voy a pasear<br>";
		break;
	case 'Domingo':
		echo "Voy a estudiar";
		break
	
	default:
		echo "Hoy descanso";
		break;
}


$n=1;

while ($n < 5) {
	echo $n.'<br>';
	$n++;
}


$z=1;

do {
	echo $z.'<br>';
	$z++;
} while ($z<=5);


for ($i=0; $i < 5; $i++) {
	echo $i;
}


?>