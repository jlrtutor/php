<?php
require 'singleton.class.php';

$objLog1 = Log::getInstance();
$objLog1->addMessageLog('New message from Obj1');

$objLog2 = Log::getInstance();
$objLog2->addMessageLog('New message from Obj2');

var_dump($objLog1);
var_dump($objLog2);