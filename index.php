<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Project\Race;
use \Project\Weather;
use \Project\VehicleFactory;
use \Project\VehicleBuilder;

$builder = new VehicleBuilder();
$builder->setType(VehicleBuilder::CAR);
$builder->setName('abc');
$builder->build();

$weather = new Weather();

$race = new Race($weather);

$builder->setType(VehicleBuilder::CAR);
$builder->setName('abc');
$builder->build();

$race->addVehicle($builder->build());

$builder->setName('cde');
$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::TRUCK);
$builder->setName('ghi');
$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::MOTORCYCLE);
$builder->setName('jkl');
$race->addVehicle($builder->build());

$race->run();