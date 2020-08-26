<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Project\Race;
use \Project\Weather;
use \Project\Car;
use \Project\Truck;
use \Project\Motorcycle;

$weather = new Weather();

$race = new Race($weather);
$race->addVehicle(new Car(1));
$race->addVehicle(new Car(2));
$race->addVehicle(new Car(3));
$race->addVehicle(new Motorcycle(1));
$race->run();