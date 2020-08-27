<?php

namespace Project;

class Truck extends Vehicle implements Vehicle_interface
{

    protected function getName(): string
    {
        return strtolower($this->name);
    }

    protected function getType(): string
    {
        return 'Truck';
    }
}