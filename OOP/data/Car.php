<?php

namespace Data;

interface  Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

interface  HasBrand
{
    function getBrand(): string;
}

interface  IsMaintance
{
    function getIsMaintance(): bool;
}

class Avanza implements Car, IsMaintance
{
    public function drive(): void
    {
        echo 'Drive Avanza' . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return 'TOYOTA';
    }

    public function getIsMaintance(): bool
    {
        return false;
    }
}