<?php
//Assignment 2: Create Doctor and Specialist Class and Show Overriding Concept

class Doctor{
    function hello(){
        echo "Hello, I'm a Doctor.";
    }
}

class Specialist extends Doctor{
    function hello(){
        echo "Hello, I am an orthopedic surgeon.";
        parent::hello();
    }
}

$doctor1 = new Specialist();
$doctor1->hello();


?>