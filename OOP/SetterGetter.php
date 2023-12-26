<?php
require_once './data/Category.php';

use Data\Category;


$category = new Category();
$category->setName('Handphone');
$category->setExpensive(true);

echo "name: {$category->getName()} " . PHP_EOL;
echo "is expensive: {$category->isExpensive()} " . PHP_EOL;
