<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class  FrontEndProgrammer extends Programmer
{

}

class  BackEndProgrammer extends Programmer
{

}

class  Company
{
    public Programmer $programmer;
}

function sayHallo(Programmer $programmer)
{
    if ($programmer instanceof BackEndProgrammer) {
        echo "Hallo Backend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontEndProgrammer) {
        echo "Hallo Frontend Programmer $programmer->name" . PHP_EOL;
    } else {
        echo "Hallo Programmer $programmer->name" . PHP_EOL;
    }
}