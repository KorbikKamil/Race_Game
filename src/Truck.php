<?php

namespace Project;

class Truck{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function move() : void{
        echo "\n Moving Truck ({$this->name})";
    }
}