<?php

use Parts\Computer;

class RaspberryPiBuilder implements BuilderInterface
{
    private $computer;

    public function addHardDisk()
    {
        $this->computer->setPart("eMMC", new Parts\HardDisk());
    }
}