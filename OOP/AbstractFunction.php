<?php
require_once './data/Animal.php';

use  Data\{Animal, Dog, Cat};

$cat = new Cat();
$cat->name = 'name';
$cat->run();


$dog = new Dog();
$dog->name = 'name';
$dog->run();