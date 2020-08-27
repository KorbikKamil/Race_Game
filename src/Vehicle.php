<?php

namespace Project;

abstract class Vehicle implements Vehicle_interface {
    protected $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract protected function getName() : string;
}
