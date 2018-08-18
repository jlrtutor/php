<?php

class iMac implements ProductInterface
{
    private $color;
    private $brand;
    private $screen;
    private $canCall;

    public function __construct()
    {
        $this->color = 'Grey';
        $this->brand = 'Apple';
        $this->screen = '21';
        $this->canCall = false;
    }

    public function makeCall(string $number)
    {
        echo "Not allowed";
    }
}