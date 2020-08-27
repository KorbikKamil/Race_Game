<?php

namespace Project;

abstract class Vehicle implements Vehicle_interface
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move(): void
    {
        echo "\n Moving {$this->getType()} ({$this->getName()})";
    }

    abstract protected function getName(): string;

    abstract protected function getType(): string;
}
