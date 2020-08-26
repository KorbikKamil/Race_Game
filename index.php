<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Project\Race;
use \Project\Weather;

$weather = new Weather();

$race = new Race($weather);
$race->run();