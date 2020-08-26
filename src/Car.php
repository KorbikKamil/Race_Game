<?php

namespace Project;

class Car extends Vehicle {
    public function move() : void{
        echo "\n Moving Car ({$this->name})";
    }
}