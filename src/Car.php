<?php

namespace Project;

class Car{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move() : void{
        echo "\n Moving Car ({$this->name})";
    }
}