<?php

class Manager //Inherintance
{
    var string $name;
    var string $title;

    public function __construct(string $name= "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void 
    {
        echo "Hi $name, my name is Manager $this->name " . PHP_EOL ;
    }
}

class VitePresident extends Manager 
{

    public function __construct(string $name= "",) //CONSTURCT OVERIDING
    {
        //TIDAK WAJIB TAPI DI REKOMENDASIKAN
        parent::__construct($name. "");
    }

    function sayHello(string $name): void //OVERIDING MENIMPA FUNCTION DI ATAS
    {
        echo "Hi $name, my name is VP $this->name " . PHP_EOL ;
    }
}