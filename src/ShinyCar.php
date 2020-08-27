<?php

namespace Project;

class ShinyCar implements Vehicle_interface, Observer {
    /**
     * @var Car
     */
    private $car;

    public function __construct(Car $car)
    {
        $this->car=$car;
    }

    public function move() : void{
        ob_start();
        $this->car->move();
        ob_end_clean();

       echo sprintf("\n I'm moving (%s) - %02.1f", $this->car->getName(), $this->car->getDistance() );
    }

    public function getDistance() : float{
        return $this->car->getDistance();
    }

    public function getName() : string {
        return '___' . $this->car->getName();
    }

    public function getType() : string {
        return $this->car->getType();
    }

    public function notify(string $event): void
    {
        $this->car->notify($event);
    }
}