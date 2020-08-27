<?php

namespace Project;

class Motorcycle extends Vehicle implements Vehicle_interface {
    public function move() : void{
        echo "\n Moving Motorcycle ({$this->name})";
    }

    protected function getName(): string
    {
        return $this->name;
    }
}