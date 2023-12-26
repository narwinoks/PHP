<?php
require_once './data/Product.php';

$product = new Product('Apple', 24000);
echo  $product->getName() .PHP_EOL;
echo $product->getPrice() .PHP_EOL;

$productDummy = new ProductDummy('APPLE',340000);
$productDummy->info();