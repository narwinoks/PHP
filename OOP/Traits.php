<?php
require_once './data/SayGoodBye.php';

use Data\Traits\{SayHallo, SayGoodBye, Person};


$person = new Person();
$person->sayGoodBye("winarno");
$person->sayHallo("budi");
$person->name = "wins";
$person->run();
var_dump($person);