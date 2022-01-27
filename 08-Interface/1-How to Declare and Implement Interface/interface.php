<?php
/*
    Interface - FRAMEWORK
    ----------------------------
    ##01 - you cannot define method in interface. 
    All the methods in interface has to be just definitions.

    ##02 - Interface are like framework or structure that every class 
    must define it when they implement the interface.

    ##03 - Any Class can implement one or many Interfaces.

    ##04 - Class that implement interface has to define  
    all the methods of interface or else it will give error.

    */

interface Car
{
    public function applyBreak();
    public function increaseSpeed();
    public function decreaseSpeed();
}

class SportsCar implements Car
{
    //Must have the Car functions defined here
    
}
