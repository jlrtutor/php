<?php

/**
* Ejemplo 01 - Clase simple
*              No se controla tipos de datos
*              Se usa constructor para inicializar la clase
**/

class Usuario
{
	// Declaración de propiedades
	public $nombre = null;
	public $edad = null;

	//Constructor de la clase
	//Inicializamos el objeto con los datos pasados en la creación del objeto
	function __construct($nombre, $edad)
	{
		echo "Creando objeto de la clase Usuario...\n";
		$this->setNombre($nombre);
		$this->setEdad($edad);
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function setEdad($edad)
	{
		$this->edad = $edad;
	}

	public function mostrarDatos()
	{
		echo "Nombre: " . $this->nombre . ". Edad: " . $this->edad . PHP_EOL;
	}
}


///////////////////////////////////////////////////////////////////////////////
// Código principal
///////////////////////////////////////////////////////////////////////////////
$usuario = new Usuario("Mario", "43");
$usuario->mostrarDatos();	//Imprime los datos del usuario por pantalla

//Cambiamos los datos iniciales
$usuario->setNombre("Ricardo");
$usuario->setEdad("28");
$usuario->mostrarDatos();	//Muestra los nuevos datos