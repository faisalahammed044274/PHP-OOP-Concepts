<?php
/*
Assignments: Create Phone Class as Abstract Class with Methods and iOS Class Implements it.
*/


abstract class Phone{

    public $callConnected;
    public $Unreachable = "false";
    abstract function Connected($number);
    abstract function NotReachable();
}

class iOS extends Phone{
    function Connected($number){
        $this->callConnected = true;
        $this->Unreachable;
    }

    function NotReachable()
    {
        if ($this->callConnected){
            echo "Not Reachable";
        }
    }
}

$phone1 = new iOS();
$phone1->Connected("testCall");
echo $phone1->NotReachable();