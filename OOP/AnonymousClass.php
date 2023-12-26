<?php

interface  HelloWord
{
    function sayHallo(): void;
}

$hello = new class('Anonymous-Class') implements HelloWord {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHallo(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$hello->sayHallo();