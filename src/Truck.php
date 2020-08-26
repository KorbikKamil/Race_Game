<?php

namespace Project;

class Truck extends Vehicle {
    public function move() : void{
        echo "\n Moving Truck ({$this->name})";
    }
}