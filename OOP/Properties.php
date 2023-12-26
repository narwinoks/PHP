<?php

require_once 'data/Person.php';

$person1 = new Person("JOHN","SOLO");
$person1->name = 'John';
$person1->address = "Solo";
$person1->country = "United States";
echo "Name: " . $person1->name . PHP_EOL;
echo "Address: " . $person1->address . PHP_EOL;
echo "Country: " . $person1->country . PHP_EOL;

$person2 = new Person("DOE" ,"JAKARTA");
$person2->name = 'Doe';
$person2->address = "Jakarta";
$person2->country = "United States";

echo "Name: " . $person2->name . PHP_EOL;
echo "Address: " . $person2->address . PHP_EOL;
echo "Country: " . $person2->country . PHP_EOL;

$person3 = new Person("DOE" ,"Jakarta");
$person3->name = 'Doe';
$person3->address = "Jakarta";

echo "Name: " . $person3->name . PHP_EOL;
echo "Address: " . $person3->address . PHP_EOL;
echo "Country: " . $person3->country . PHP_EOL;