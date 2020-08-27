<?php

namespace Project;

class Car extends Vehicle implements Vehicle_interface
{
    protected $type = 'Car';

    protected function getName(): string
    {
        return strtoupper($this->name);
    }

}