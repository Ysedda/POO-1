<?php

require_once 'Car.php';
require_once 'Bicycle.php';

$ferrari = new Car('red', 2, 'gpl');
var_dump($ferrari);
$ferrari->forward();
var_dump($ferrari);
$ferrari->brake();
var_dump($ferrari);
