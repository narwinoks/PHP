<?php
require_once './data/Student.php';

$students = new Student();
$students->name = 'win';
$students->id = '11';
$students->value = 12;


$students("1","2","3");