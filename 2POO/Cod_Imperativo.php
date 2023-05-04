<?php 
#Codigo imperativo o espagueti

$auto1 = (object)['marca'=>'Toyota', 'modelo'=>'Corolla'];
$auto2 = (object)['marca'=>'Nissan', 'modelo'=>'Sentra'];

function mostrar($automovil){
	echo "<p>Holas soy un $automovil->marca, modelo $automovil->modelo</p>";
}

mostrar($auto2);
mostrar($auto1);


?>