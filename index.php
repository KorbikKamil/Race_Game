<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Project\Race;
use \Project\Weather;
use \Project\Car;
use \Project\Truck;
use \Project\Motorcycle;

$weather = new Weather();

$race = new Race($weather);
$race->addVehicle(new Car());
$race->addVehicle(new Car());
$race->addVehicle(new Car());
$race->addVehicle(new Motorcycle());
$race->run();