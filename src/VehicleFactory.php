<?php

namespace Project;

class VehicleFactory {
    const CAR = 'car';
    const MOTORCYCLE = 'motorcycle';
    const TRUCK = 'truck';

    public static function factory(string $type, string $name) : Vehicle{
        $vehicle = null;

        switch ($type){
            case self::CAR:
                $vehicle = new Car($name);
                break;
            case self::MOTORCYCLE:
                $vehicle = new Motorcycle($name);
                break;
            case self::TRUCK:
                $vehicle = new Truck($name);
                break;
        }

        if(!$vehicle){
            throw new \Exception('Could not recognise type');
        }

        return $vehicle;
    }
}