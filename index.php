<?php

requireonce 'Car.php';
requireonce 'Bicycle';

$ferrari = new Car('red', 2, 'gpl');
var_dump($ferrari);
$ferrari->forward();
var_dump($ferrari);
$ferrari->brake();
var_dump($ferrari);
