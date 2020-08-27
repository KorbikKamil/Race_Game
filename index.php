<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Project\Race;
use \Project\Weather;
use \Project\VehicleFactory;

$weather = new Weather();

$race = new Race($weather);
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 1));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 2));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 3));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::MOTORCYCLE, 1));
$race->run();