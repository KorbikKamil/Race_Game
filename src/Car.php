<?php

namespace Project;

class Car extends Vehicle implements Vehicle_interface {
    public function move() : void{
        echo "\n Moving Car ({$this->name})";
    }

    protected function getName(): string
    {
        return $this->name;
    }

}