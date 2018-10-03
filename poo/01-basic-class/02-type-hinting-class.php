<?php

/**
*	Ejemplo 02 - Uso del Type Hinting (o declaración de tipos)
**/

class Aplicacion
{
	private $nombre;			//Nombre de la aplicación - type string
	private $version;			//Versión del software - type float
	private $agno_publicacion;	//Año de publicación - type int

	public function __construct(string $nombre = NULL, float $version = NULL, int $agno_publicacion = NULL)
	{
		$this->setNombre($nombre);
		$this->setVersion($version);
		$this->setAgnoPublicacion($agno_publicacion);
	}

	// Obligamos a que la funcíón devuelve un STRING o se generará un ERROR
	public function getDatos() : string 
	{
		return "Programa: " . $this->nombre . " v" . $this->version . "\n";
	}

	// Forzamos que la variable nombre sea de tipo String
	public function setNombre(string $nombre)
	{
		$this->nombre = $nombre;
	}

	// Forzamos que la variable versión sea de tipo Float
	public function setVersion(float $version)
	{
		$this->version = $version;
	}

	// Parámetro de Año de publicación de tipo INT
	public function setAgnoPublicacion(int $agno)
	{
		$this->agno_publicacion = $agno;
	}

}

//Código
$nombre_programa = "MS Excel";
$version = 6.1;
$agno_publicacion = 2015;

$programa = new Aplicacion( $nombre_programa, $version, $agno_publicacion);

echo $programa->getDatos();	//Devuelve string, por eso usamos ECHO
