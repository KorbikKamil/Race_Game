<?php

namespace Project;

class Car extends Vehicle
{
    protected $type = 'Car';
    protected $maxSpeed = 180;

    public function getName(): string
    {
        return strtoupper($this->name);
    }

    public function notify(string $event): void
    {
        if ($event === 'nextTurn') {
            $this->move();
        }
    }

    protected function preMove(): void
    {
        $this->distance += $this->maxSpeed * rand(70, 100) / 100;
    }
}
