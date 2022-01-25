<?php

use Teacher as GlobalTeacher;
use University as GlobalUniversity;

final class University{
    final function hello(){
            echo "University class" . PHP_EOL;
    }
}

class Teacher extends University{
    function hello(){
            echo "Teacher class" . PHP_EOL;
    }
}
//final keyword is restricted Inheritence.
$teacher1 = new Teacher();
$teacher1->hello();

$university1 =  new University();
$university1->hello();
?>