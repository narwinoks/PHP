<?php

namespace Data;
require_once 'Animal.php';

interface  AnimalShalter
{
    function adopt(string $name): Animal;
}

class  CatShalter implements AnimalShalter
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        $cat->run();
        return $cat;
    }
}

class  DogShalter implements AnimalShalter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        $dog->run();
        return $dog;
    }
}