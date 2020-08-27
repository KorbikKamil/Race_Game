<?php

namespace Project;

abstract class Vehicle implements Vehicle_interface
{
    protected $name;
    protected $type;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move(): void
    {
        echo "\n Moving {$this->getType()} ({$this->getName()})";
    }

    abstract protected function getName(): string;

     protected function getType(): string{
        return $this->type;
    }
}
