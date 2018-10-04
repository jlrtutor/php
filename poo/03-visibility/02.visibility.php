<?php
/**
* Only main class can access to its protected vars
**/

class ProtectedClass
{
	protected $password;

	public function __construct()
	{
		$this->password = md5("MySecretPassword");
	}
}


class SecurityClass extends ProtectedClass
{
	public function getPassword()
	{
		//Error 
		//parent::$password;
	}
}

$testObject = new SecurityClass;
//Error
//echo $testObject->getPassword();