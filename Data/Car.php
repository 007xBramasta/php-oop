<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function IsMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void ;

    function getTire(): int;
}

class Avanza implements Car , IsMaintenance //INHERINTANCE INTERFACE , BISA POLYMORPISHME
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function IsMaintenance(): bool
    {
        return false;
    }
}