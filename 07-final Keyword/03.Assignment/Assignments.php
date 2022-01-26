<?php

//Create a Bank and User Class and use final Keyword


final class Bank
{
    final function balance()
    {
        echo "Reserved 100000000000" . PHP_EOL;
    }
}

class User extends Bank
{
    function balance()
    {
        echo "Reserver for the user is 1000000" . PHP_EOL;
    }
}
 //Final keyword restricted class and methods both

$bank1 = new Bank();
$bank1->balance();

$user1 = new User();
$user1->balance();
