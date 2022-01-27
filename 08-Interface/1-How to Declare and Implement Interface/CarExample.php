<?php

require_once "Car.php";
require_once "SportsCar.php";

$interface1 = new SportsCar();
$interface1->applyBreak();
$interface1->increaseSpeed();
$interface1->decreaseSpeed();
