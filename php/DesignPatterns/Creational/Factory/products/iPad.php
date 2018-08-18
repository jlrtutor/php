<?php

class iPad implements ProductInterface
{
    private $color;
    private $brand;
    private $screen;
    private $canCall;

    public function __construct()
    {
        $this->color = 'Black';
        $this->brand = 'Apple';
        $this->screen = '10.1';
        $this->canCall = false;
    }

    public function makeCall(string $number)
    {
        echo "Not allowed";
    }
}