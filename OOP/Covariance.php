<?php
require_once 'data/Animal.php';
require_once 'data/AnimalShalter.php';
require_once 'data/Food.php';

use Data\{CatShalter};

$catShalter = new CatShalter();
$cat = $catShalter->adopt("LUNA MAYA");
$cat->eat(new \Data\AninalFood());
$dogShalter = new \Data\DogShalter();
$dog = $dogShalter->adopt("LUNA MAYA DO");
$dog->eat(new \Data\Food());


