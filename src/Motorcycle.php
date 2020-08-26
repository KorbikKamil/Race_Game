<?php

namespace Project;

class Motorcycle{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function move() : void {
        echo "\n Moving Motorcycle ({$this->name})";
    }
}