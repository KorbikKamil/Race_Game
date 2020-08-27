<?php

namespace Project;

class Truck extends Vehicle implements Vehicle_interface
{
    protected $type = 'Truck';

    protected function getName(): string
    {
        return strtolower($this->name);
    }
}