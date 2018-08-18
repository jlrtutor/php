<?php

require_once 'productFactory.php';

$productFactory = new ProductFactory();
$iPhone = $productFactory->createProduct('iPhone');
$iPhone->makeCall('555-891-100');
var_dump($iPhone);

$iMac = $productFactory->createProduct('iMac');
$iMac->makeCall('555-891-100');
var_dump($iMac);

$iPad = $productFactory->createProduct('iPad');
$iPad->makeCall('555-891-100');
var_dump($iPad);