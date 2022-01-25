<?php

/*Assignment 1: Create Father and Son Class and 
Show Inheritance Concept.
*/
class Whoami
{

    protected $name;
    protected $parent = false;

    function role()
    {
        if ($this->parent) {
            echo "Yeah, I'm parent" . PHP_EOL;
        } else {
            echo "YAP, I'm child" . PHP_EOL;
        }
    }
}
class Father extends Whoami
{

    function __construct($name, $parent)
    {
        $this->name = $name;
        $this->parent = $parent;
    }

    function who()
    {
        echo "Hey i am your father." . PHP_EOL;
    }
}

class Son extends Whoami
{

    function __construct($name, $parent)
    {
        $this->name = $name;
        $this->parent = $parent;
    }

    function who()
    {
        echo "hey dad, i am your Son." . PHP_EOL;
    }
}

$Parent1 = new Father("Jhon", true);
$Parent1->role();
$Parent1->who();

$child1 =  new Son("Peter", false);
$child1->role();
$child1->who();
