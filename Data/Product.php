<?php

class Product
{
    protected string $name; //TURUNAN CLASS BISA MENGAKSES
    private int $price; // HANYA CLASS INI SAJA YANG BISA MENGAKSES CLASS TURUNAN TIDAK BISA ATAUPUN FUNCTION DI LUAR CLASS

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getPrice() : int
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{

    public function info ()
    {
        echo "Name $this->name" . PHP_EOL; //TIDA EROR KARENA PROTECTED BISA DI AKSES CLASS TURUNANNYA
    }
    
}