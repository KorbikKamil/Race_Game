<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Project\Race;
use \Project\Weather;
use \Project\VehicleFactory;

$weather = new Weather();

$race = new Race($weather);
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 'abCD'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 'cdEF'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::TRUCK, 'ghi'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::MOTORCYCLE, 'zaW4'));
$race->run();