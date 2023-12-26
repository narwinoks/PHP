<?php
require_once './data/Programmer.php';

$company = new Company();
$company->programmer = new BackEndProgrammer("EKO");
var_dump($company);
$company->programmer = new FrontEndProgrammer("EKO");
var_dump($company);
$company->programmer = new Programmer("EKO");
var_dump($company);
sayHallo(new Programmer("EKO"));
sayHallo(new Programmer("EKO"));
sayHallo(new BackEndProgrammer("EKO"));
sayHallo(new frontendProgrammer("EKO"));