<?php

namespace Project;

class Motorcycle extends Vehicle {
    public function move() : void{
        echo "\n Moving Motorcycle ({$this->name})";
    }
}