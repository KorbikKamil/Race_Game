<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Project\Race;
use \Project\Weather;
use \Project\VehicleBuilder;
use \Project\ShinyCar;

$b = new DI\ContainerBuilder();
$b->addDefinitions(
    [
        'VB' => DI\create(VehicleBuilder::class),
        'Weather' => DI\factory(
            [
                Weather::class,
                'getInstance',
            ]
        ),
        'Race' => DI\create(Race::class)->constructor(DI\get('Weather'))
    ]
);
$container = $b->build();


$builder = $container->get('VB');
$builder->setType(VehicleBuilder::CAR);
$builder->setName('abc');
$builder->build();

$weather = $container->get('Weather');

$race = $container->get('Race');

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
