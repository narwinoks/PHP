<?php

class Person
{
    const  AUTHOR = "PROGRAMMER ZAMAN NOW";
    var string $name;
    var ?string $address = null;
    var string $country = "INDONESIA";

    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    public function __destruct()
    {
        echo  "Object person {$this->name} IS destroyed " .PHP_EOL;
    }

    function sayHallo(?string $name): void
    {
        if (is_null($name)) {
            echo "Hi ,my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name ,my name is $this->name" . PHP_EOL;
        }
    }

    function info(): void
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}