<?php

namespace Data;
require_once 'Food.php';

abstract class Animal
{
    public string $name;

    abstract function run(): void;

    abstract public function eat(AninalFood $aninalFood): void;
}

class  Cat extends Animal
{

    function run(): void
    {
        echo "cat $this->name is running" . PHP_EOL;
    }

    public function eat(AninalFood $aninalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{

    function run(): void
    {
        echo "dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $food): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}