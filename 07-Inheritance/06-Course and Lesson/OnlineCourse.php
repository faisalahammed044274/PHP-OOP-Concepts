<?php

require_once "Course.php";
require_once "Lesson.php";

$course = new Course(100, "OOP Basics");
$course = new Course(200, "Inheritance");
$lesson = new Lesson(101, "What is OOP?", $course);
$lesson->printCourseDetails();
$lesson->printLessonDetails();

