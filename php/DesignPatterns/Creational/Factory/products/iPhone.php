<?php

class iPhone implements ProductInterface
{
    private $color;
    private $brand;
    private $screen;
    private $canCall;

    public function __construct()
    {
        $this->color = 'white';
        $this->brand = 'Apple';
        $this->screen = '5.8';
        $this->canCall = true;
    }

    public function makeCall(string $number)
    {
        echo "Calling to " . $number . " number.";
    }
}