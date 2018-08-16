<?php
namespace PHP\DesignPatterns\Creational\Factory;

class mobile extends FactoryPattern
{
    protected function createProduct(string $brand)
    {
        $this->setBrand($brand);
        switch(strtolower($brand))
        {
            case 'iphone':
                $this->setColor('white');
                $this->setScreenSize('5.9');
                break;
            case 'samsung':
                $this->setColor('black');
                $this->setScreenSize('5.1');
                break;
        }
    }
}