<?php

use SportsCar as GlobalSportsCar;

require_once "Car.php";

class SportsCar implements Car
{
    public function applyBreak()
    {
        echo " Applybreak" . PHP_EOL;
    }

    public function increaseSpeed()
    {
        echo " Increase speed" . PHP_EOL;
    }

    public function decreaseSpeed()
    {
        echo "Decrease speed" . PHP_EOL;
    }
}
