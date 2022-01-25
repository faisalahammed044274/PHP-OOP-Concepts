<?php
class University{

    function hello(){
        echo "Hello from University Class" . PHP_EOL;
    }

}

class Teacher extends University{

    //Overriding of methods
    function hello(){
        echo "Hello from Teachers Class" . PHP_EOL;
        parent::hello(); 
    }

}

$teacher1 = new Teacher();
$teacher1->hello();

?>