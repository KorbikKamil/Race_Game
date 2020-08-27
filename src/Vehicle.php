<?php

namespace Project;

abstract class Vehicle implements Vehicle_interface {
    protected $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move() : void{
        echo "\n Moving Vehicle ({$this->name})";
    }
}
