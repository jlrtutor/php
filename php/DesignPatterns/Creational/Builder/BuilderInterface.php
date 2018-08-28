<?php
namespace Builder;
use Parts\Computer;

interface BuilderInterface
{
    public function createComputer();
    public function addHardDisk();
    public function addMemory();
    public function addProcessor();

    public function getComputer(): Computer;
}