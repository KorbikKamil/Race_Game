<?php

namespace Project;

class Car extends Vehicle implements Vehicle_interface
{
    protected function getName(): string
    {
        return strtoupper($this->name);
    }

    protected function getType(): string
    {
        return 'Car';
    }
}