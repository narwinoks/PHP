<?php

namespace Data;

abstract class  Location
{
    public string $name;
}

class  Province extends Location
{

}

class City extends Location
{

}

class  Country extends Location
{

}