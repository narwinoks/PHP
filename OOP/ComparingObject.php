<?php
require_once  './data/Student.php';

$student1 = new Student();
$student1->name = 'Student 1';
$student1->id ="1";
$student1->value =11;

$student2 = new Student();
$student2->name = 'Student 1';
$student2->id ="1";
$student2->value =11;

var_dump($student1 == $student2);
var_dump($student1 === $student2);
var_dump($student1 === $student1);
