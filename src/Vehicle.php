<?php

namespace Project;

abstract class Vehicle implements Vehicle_interface
{
    protected $name;
    protected $type;
    protected $distance = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move(): void
    {
        $this->preMove();
        echo "\n Moving {$this->getType()} ({$this->getName()}) by {$this->distance}";
        $this->postMove();
    }

    protected function getType(): string
    {
        return $this->type;
    }

    protected function postMove() : void { }
    abstract protected function preMove() : void;
    abstract protected function getName(): string;

}
