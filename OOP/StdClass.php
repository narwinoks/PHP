<?php
require_once 'data/Person.php';
$array = [
    'firstName' => 'John',
    'middleName' => 'Muhammad',
    'lastName' => 'Doe'
];
$object = (object)$array;

echo "First name: " . $object->firstName . PHP_EOL;
echo "Middle name: " . $object->middleName . PHP_EOL;
echo "Last name: " . $object->lastName . PHP_EOL;

$arrayLg = (array)$object;
var_dump($arrayLg);
$person = new Person("EKO" ,"SUBANG");
var_dump( (array) $person);