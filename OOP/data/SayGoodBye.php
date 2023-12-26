<?php

namespace Data\Traits;

trait SayGoodBye
{
    function sayGoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye " . $name . PHP_EOL;
        }
    }
}

trait SayHallo
{
    function sayHallo(?string $name): void
    {
        if (is_null($name)) {
            echo "Hallo" . PHP_EOL;
        } else {
            echo "Hallo " . $name . PHP_EOL;
        }
    }
}

//Trait-Overriding
trait  CanRun
{
    public abstract function run(): void;
}

trait  HashName
{
    public string $name;
}

class  ParentPerson
{
//    public function sayGoodBye(): void
//    {
//        echo "Good Bye in Person" . PHP_EOL;
//    }
//
//    public function sayHallo(): void
//    {
//        echo "Hello IN person" . PHP_EOL;
//    }
}

trait  All
{
    use SayGoodBye, SayHallo, HashName, CanRun;
}

class Person extends ParentPerson
{
    use All;
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

//    public function sayGoodBye(): void
//    {
//        echo "Good Bye in Person" . PHP_EOL;
//    }
//
//    public function sayHallo(): void
//    {
//        echo "Hello IN person" . PHP_EOL;
//    }
}
