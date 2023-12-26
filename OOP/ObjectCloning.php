<?php
require_once './data/Student.php';

$student = new Student();
$student->name ="EKO";
$student->value =12;
$student->id = '111';
$student->setSample('XXX');
var_dump($student);

$student2= clone $student;
var_dump($student2);

//manual
//$student2 = new Student();
//$student2->name =$student->name;
//$student2->value =$student->value;
//$student2->id = $student->id;