<?php 

#Funciones sin parametro

function saludo(){
	echo "Hola gente<br>";
}

saludo();
#Funciones con parametros

function despedida($adios){
	echo $adios."<br>";
}

despedida("adios");


#Funcion con retorno

function retornar($retorna){
	return $retorna;
}

echo retornar("retornar");


?>