<?php

require_once "Car.php";
require_once "CarModel.php";

class SportsCar implements Car
{

    public $model;
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

    public function setModel($model)
    {
        $this->model = $model;
    }
    public function getModel(): string
    {
        return $this->model;
    }
}
