<?php
 class University{
     protected $UniversityName = "Boston University";
     function helloUniversity(){
         echo "Hello from $this->UniversityName" . PHP_EOL;
     }
 }

 class Teacher extends university{
     public $teacherName = "Jane";
     function helloTeacher(){
         echo "Hello from $this->teacherName" . PHP_EOL;
     }

     function getUniversityName(){
         return $this->UniversityName;
     }
 }

 $teacher1 =  new Teacher();
 $teacher1->helloTeacher();
 $teacher1->helloUniversity(); 
 // using Child Object to Call the parent method;
 echo $teacher1->getUniversityName();

//  echo $teacher1 ->teacherName . PHP_EOL;
//  echo $teacher->UniversityName .  PHP_EOL;
