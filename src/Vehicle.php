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

    public function getType(): string
    {
        return $this->type;
    }

    abstract public function getName(): string;

    public function getDistance(): float
    {
        return $this->distance;
    }

    public function notify(string $event): void
    {
        if($event === 'nextTurn'){
            $this->move();
        }
    }

    protected function postMove() : void {}
    protected function preMove() : void {}
}
