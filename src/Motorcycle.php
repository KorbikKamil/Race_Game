<?php

namespace Project;

class Motorcycle extends Vehicle implements Vehicle_interface
{
    protected function getName(): string
    {
        return $this->name;
    }

    protected function getType(): string
    {
        return 'Motorcycle';
    }
}