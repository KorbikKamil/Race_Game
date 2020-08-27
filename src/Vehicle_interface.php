<?php

namespace Project;

interface Vehicle_interface{
    public function move() : void;

    public function getDistance() : float;

    public function getName() : string ;

    public function getType() : string ;
}