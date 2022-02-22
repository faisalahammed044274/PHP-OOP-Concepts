<?php
/*
Assignments: Create Phone Class as Abstract Class with Methods and iOS Class Implements it.
*/


abstract class Phone{

    public $callConnected;
    public $unreachable = false;
    abstract function Connected($number);
    abstract function NotReachable();
}

class iOS extends Phone{
    function Connected($number){
        $this->unreachable = true;
        $this->callConnected = "YEYY, Stablished the call !";
    }

    function NotReachable()
    {
        if ($this->unreachable){
            return $this->callConnected;
        }
    }
}

$phone1 = new iOS();
$phone1->Connected("testCall");
echo $phone1->NotReachable();