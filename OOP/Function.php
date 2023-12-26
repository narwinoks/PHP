<?php
require_once 'data/Person.php';

$person = new Person("JOHN","BANDUNG");
$person->name = 'John';
$person->sayHallo("BUDI");
$person->info();

$person1 = new Person("JOHN" ,"BANDUNG");
$person1->name = 'John';
$person1->sayHallo(null);
$person->info();