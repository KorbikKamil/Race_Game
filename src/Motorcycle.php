<?php

namespace Project;

class Motorcycle extends Vehicle implements Vehicle_interface
{
    protected $type = 'Motorcycle';

    protected function getName(): string
    {
        return $this->name;
    }
}