<?php

namespace Builder\Parts;

abstract class Computer
{
    private $parts = array();

    public function setPart($key, $val)
    {
        $this->parts[$key] = $val;
    }

}