<?php

/**
*   02-Inheritance
*	Ejemplo 01 - Uso del Type Hinting (o declaración de tipos)
**/

class Vehicle
{
	public $num_wheels;
	public $max_speed;

	public function __construct()
	{
		echo "Init Vehicle O bject...\n";
	}

	public function getNumWheels() 
	{
		return $this->num_wheels;
	}

	public function getMaxSpeed()
	{
		return $this->max_speed;
	}

	public function setNumWheels(int $num)
	{
		$this->num_wheels = $num;
	}

	public function setMaxSpeed(int $speed)
	{
		$this->max_speed = $speed;
	}
}


class Car extends Vehicle
{
	public function __construct()
	{
		$this->num_wheels = 4;
		$this->max_speed = 180;
		echo "Init Car Object...\n";
	}
}

class Motorcycle extends Vehicle
{
	public function __construct()
	{
		$this->num_wheels = 2;
		$this->max_speed = 120; 
		echo "Init Motorcycle Object...\n";
	}
}


//Código
$myCar = new Car;
echo "My car has " . $myCar->getNumWheels() . " wheels\n";
echo "My car can speed up " . $myCar->getMaxSpeed() . " km/h\n";

$myMotorcycle = new Motorcycle;
echo "My old motorcycle speeded up " . $myMotorcycle->getMaxSpeed() . " km/h\n";
$myMotorcycle->setMaxSpeed(175);
echo "But my new one speeds up " . $myMotorcycle->getMaxSpeed() . " km/h\n";