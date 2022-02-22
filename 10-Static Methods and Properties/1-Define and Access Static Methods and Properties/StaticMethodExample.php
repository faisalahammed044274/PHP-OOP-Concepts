<?php



class Calculator{
    static public $result;
    static function add($a, $b) : int{
        $result = $a + $b ;
        return $result;
    }
}

Calculator::$result = 20;
echo Calculator::$result . PHP_EOL;
echo Calculator::add(2,78) . PHP_EOL;