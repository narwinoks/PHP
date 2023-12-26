<?php

trait  A
{
    function DOA()
    {
        echo "a" . PHP_EOL;
    }

    function DOB()
    {
        echo "b" . PHP_EOL;
    }
}

trait  B
{
    function DOA()
    {
        echo "A" . PHP_EOL;
    }

    function DOB()
    {
        echo "B" . PHP_EOL;
    }
}

class  Sample
{
    use A, B {
        A::DOA insteadof  B;
        B::DOB insteadof A;
    }
}

$sample = new Sample();
$sample->DOA();
$sample->DOB();