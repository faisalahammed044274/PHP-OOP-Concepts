<?php 

/*

Exrecise 1 : CREATE A PHONE INTERFACE AND IMPLEMENT
IOS CLASS

1. Define Phone Interface with makeCall with number parameter and
sendMessage with number and message parameter.

2. Define iOS to implement the phone Interface and Implement the methods.

*/ 

interface Phone{

    public function makeCall($number);
    public function sendMessage($number, $message);

    
}

class iOS implements Phone{

    public function makeCall($number){
        echo "Making Call to $number." . PHP_EOL;
    }

    public function sendMessage($number, $message){
        echo "Sending $message to $number." . PHP_EOL;
    }

}

$iPhoneXII = new iOS();
$iPhoneXII->makeCall(121121121);
$iPhoneXII->sendMessage("121121121", "Learn Interface here");

