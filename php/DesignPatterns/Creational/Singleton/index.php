<?php
require 'singleton.class.php';

$objLog1 = Log::getInstance();
$objLog1->addMessageLog('New message from Obj1');

$objLog2 = Log::getInstance();
$objLog2->addMessageLog('New message from Obj2');
$objLog2->addMessageLog('Other message from Obj2');
$objLog2->addMessageLog('All messages goes to the same var');

var_dump($objLog1);