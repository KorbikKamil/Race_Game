<?php

namespace Project;

class Car extends Vehicle implements Vehicle_interface
{
    protected $type = 'Car';
    protected $maxSpeed = 180;

    protected function getName(): string
    {
        return strtoupper($this->name);
    }

    protected function preMove(): void
    {
        $this->distance += $this->maxSpeed * rand(70,100) / 100;
    }



}