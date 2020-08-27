<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Project\Race;
use \Project\Weather;
use \Project\VehicleBuilder;
use \Project\ShinyCar;

$builder = new VehicleBuilder();
$builder->setType(VehicleBuilder::CAR);
$builder->setName('abc');
$builder->build();

$weather = Weather::getInstance();

$race = new Race($weather);

$builder->setType(VehicleBuilder::CAR);
$builder->setName('abc');

$race->addVehicle(new ShinyCar($builder->build()));


$builder->setName('cde');
$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::TRUCK);
$builder->setName('ghi');
$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::MOTORCYCLE);
$builder->setName('jkl');
$race->addVehicle($builder->build());

$race->run();