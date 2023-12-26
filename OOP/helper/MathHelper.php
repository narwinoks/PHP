<?php

namespace helper;

class  MathHelper
{
    static public string $name = "MATH HELPER";

    public static function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}