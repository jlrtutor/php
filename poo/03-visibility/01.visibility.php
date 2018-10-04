<?php

class AllPublicClass
{
	public $name;
	public $lastname;

	public function __construct(){}
}

$myPublicObjectClass = new AllPublicClass;
//Can access to name and lastname...
$myPublicObjectClass->name = "Peter";
$myPublicObjectClass->lastname = "Lancaster";

echo "Name: " . $myPublicObjectClass->name . "\n";
echo "Lastname: " . $myPublicObjectClass->lastname . "\n";


//Now let's use private
class PrivateClass
{
	private $name;
	private $lastname;

	public function __construct($name, $lastname)
	{
		$this->name = $name;
		$this->lastname = $lastname;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getLastname()
	{
		return $this->lastname;
	}
}

$myPrivateObjectClass = new PrivateClass('Peter', 'Lancaster');
//Fatal error:  Uncaught Error: Cannot access private property PrivateClass::$name
//echo "Name: " . $myPrivateObjectClass->name . "\n";

//Right way...
echo "Name: " . $myPrivateObjectClass->getName() . "\n";
echo "Lastname: " . $myPrivateObjectClass->getLastname() . "\n";