<?php
require_once './data/Shape.php';

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$ractangle = new Rectangle();
echo $ractangle->getCorner() . PHP_EOL;
echo $ractangle->getParentCorner() . PHP_EOL;