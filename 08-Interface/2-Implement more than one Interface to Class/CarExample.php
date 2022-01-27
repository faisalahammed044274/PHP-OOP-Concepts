<?php

require_once "Car.php";
require_once "SportsCar.php";

$Car1 = new SportsCar();
$Car1->setModel("Ferrari");
echo "Car Model : " . $Car1->getModel() . PHP_EOL;

$Car1->applyBreak();
$Car1->increaseSpeed();
$Car1->decreaseSpeed();
