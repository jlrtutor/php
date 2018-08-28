<?php

namespace Builder;
use Builder\Parts\Computer;

class Director
{
    public function create(BuilderInterface $builder): Computer
    {
        $builder->createComputer();
        $builder->addMemory();
        $builder->addHardDisk();
        $builder->addProcessor();
    }
}