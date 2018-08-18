<?php
require_once 'productInterface.php';
require_once 'products/iPhone.php';
require_once 'products/iPad.php';
require_once 'products/iMac.php';


class ProductFactory
{
    public function createProduct($type)
    {
        switch(strtolower($type))
        {
            case 'iphone':
                return new iPhone();
            case 'ipad':
                return new iPad();
            case 'imac':
                return new iMac();
        }
    }
}