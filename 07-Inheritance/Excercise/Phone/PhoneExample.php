/*
1. Define a Phone Class
2. Define a Samsung Class which inherits from Phone Class
3. Define a Nokia Class which inhetrits from Phone Class
4. Define name and isTouch boolean property of Phone class...
5. Define doesTouch() method in Phone Class
6. Define PhoneDetails() in Samsung and Nokia Class
7. Use Constructor and Pass if Phone does touched or not.
*/

<?php

class Phone
{
    protected $name;
    protected $touchPhone = false;

    function doesTouch()
    {
        if ($this->touchPhone) {
            echo "It's Touch enabled phone." . PHP_EOL;
        } else {
            echo "It's Button Phone." . PHP_EOL;
        }
    }
}

class Samsung extends Phone
{

    function __construct($name, $touchPhone)
    {
        $this->name = $name;
        $this->touchPhone = $touchPhone;
    }

    function phoneDetails()
    {
        echo " Samsung touched phone" . PHP_EOL;
    }
}

class Nokia extends Phone
{

    function __construct($name, $touchPhone)
    {
        $this->name =  $name;
        $this->touchPhone =  $touchPhone;
    }

    function phoneDetails()
    {
        echo " Nokia Button Phone" . PHP_EOL;
    }
}

$samsung1 = new Samsung("Galaxy S3", false);
$samsung1->phoneDetails();
$samsung1->doesTouch();

$nokia1 = new Nokia("Nokia 3310", true);
$nokia1->phoneDetails();
$nokia1->doesTouch();
?>