<?php

namespace Project;

class Motorcycle extends Vehicle
{
    protected $type = 'Motorcycle';
    protected $maxSpeed = 250;

    public function getName(): string
    {
        return $this->name;
    }

    protected function preMove(): void
    {
        $this->distance += $this->maxSpeed * rand(20, 100) / 100;

        $wather = Weather::getInstance();
        if ($wather->isRaining()) {
            $this->distance -= 20;
        }
    }
}