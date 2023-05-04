<?php

#Clase. Es un modelo que se usa para crear obj que 
#comparten un mismo comportamiento, estado e identidad.

/**
 * 
 */
class Automovil
{
	#Propiedades. Son las carcterísticas que pueden tener un obj,

	public $marca;
	public $modelo;

	#Metodo. Algoritmo asociado a un obj que indica la capacidad que puede hacer, se llama así
	#a las funciones de las clases (en la POO)
	public function mostrar()
	{
		echo "<p>Hola soy un $this->marca, modelo $this->modelo</p>";
	}
}

#Obj. Una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos

$a= new Automovil();
$a -> marca="Toyota";
$a -> modelo='Corolla';
$a -> mostrar();

$b= new Automovil();
$b -> marca="Nissan";
$b -> modelo='Sentra';
$b -> mostrar();

?>
