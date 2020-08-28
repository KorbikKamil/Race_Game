<?php

namespace Project;

class VehicleBuilder
{
    const CAR = VehicleFactory::CAR;
    const MOTORCYCLE = VehicleFactory::MOTORCYCLE;
    const TRUCK = VehicleFactory::TRUCK;

    private $name = '';
    private $type = '';

    public function setType(string $type) : void
    {
        $this->type = $type;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function build(): Vehicle_interface
    {
        $vehicle = null;

        switch ($this->type) {
            case self::CAR:
            case self::MOTORCYCLE:
            case self::TRUCK:
                $vehicle = VehicleFactory::factory($this->type, $this->name);
                break;
            default:
                throw new \Exception('Could not recognise type');
        }

        return $vehicle;
    }
}
