/*
1. Define a Animal Class
2. Define a Dog Class which inherits from Animal Class
3. Define a TIger Class which inhetrits from Animal CLass
4. Define name and ishuting boolean property of Animal class...
5. Define doesHunting() method in Animal Class
6. Define makeSound() in Dog and Tiger Class
7. Use Constructor and Pass if Animal does hunting or not.
*/

<?php
class Animal
{
    protected $name;
    protected $hunt = false;

    function doesHunting()
    {
        if ($this->hunt) {
            echo "Yes, It Hunts." . PHP_EOL;
        } else {
            echo "No,  It Doesn't Hunts." . PHP_EOL;
        }
    }
}

class Dog extends Animal
{

    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }

    function makeSound()
    {
        echo "Woff! Woff!" . PHP_EOL;
    }
}

class Tiger extends Animal
{

    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }

    function makeSound()
    {
        echo "Grrr! Grrr!" . PHP_EOL;
    }
}

$dog1 = new Dog("Hush Puppies", false);
$dog1->makeSound();
$dog1->doesHunting();

$tiger1 = new Tiger("Indian Tiger", true);
$tiger1->makeSound();
$tiger1->doesHunting();
