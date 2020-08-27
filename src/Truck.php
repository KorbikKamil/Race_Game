<?php

namespace Project;

class Truck extends Vehicle implements Vehicle_interface {
    public function move() : void{
        echo "\n Moving Truck ({$this->name})";
    }

    protected function getName(): string
    {
        return $this->name;
    }
}