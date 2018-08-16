<?php

namespace PHP\DesignPatterns\Creational\Factory;

abstract class FactoryPattern
{
    /**
     * @var string
     */
    private $color;
    /**
     * @var string
     */
    private $brand;
    /**
     * @var string
     */
    private $screen_size;

    abstract protected function createProduct(string $type): productInterface;

    public function create(string $type): productInterface
    {
        $objProduct = $this->createProduct($type);
        return $objProduct;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }
    
    public function setScreenSize(string $size)
    {
        $this->screen_size = $size;
    }
}