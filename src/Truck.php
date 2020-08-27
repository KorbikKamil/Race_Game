<?php

namespace Project;

class Truck extends Vehicle
{
    protected $type = 'Truck';
    protected $maxSpeed = 100;

    public function getName(): string
    {
        return strtolower($this->name);
    }

    protected function preMove(): void
    {
        $this->distance += $this->maxSpeed * rand(80, 100) / 100;
    }


}