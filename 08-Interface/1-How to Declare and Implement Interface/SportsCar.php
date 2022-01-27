<?php

use SportsCar as GlobalSportsCar;

require_once "Car.php";

class SportsCar implements Car
{
    public function applyBreak()
    {
        echo " here i am applybreak" . PHP_EOL;
    }

    public function increaseSpeed()
    {
        echo " here i am increase speed" . PHP_EOL;
    }

    public function decreaseSpeed()
    {
        echo "here i am decrease speed" . PHP_EOL;
    }
}

$interface1 = new SportsCar();
$interface1->applyBreak();
$interface1->increaseSpeed();
$interface1->decreaseSpeed();
