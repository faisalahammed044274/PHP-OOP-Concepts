<?php

// Create a windowsDriver class and Restrict inheritance

class driverFinal{
    private $updateInstructions = "Instructions";

    final function runDriverUpdate(){
        echo 'executing the update inistructions' . PHP_EOL;
    }
}

/*
    class WindowsProgram extends DriverFinal{
        Cannot Extend DriverFinal.
    }
*/

