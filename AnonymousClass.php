<?php

interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new class("Bramasta Ganteng") implements HelloWorld{ //ANONYMOUS CLASS

    public string $name;

    public function __construct(string $name) //ANONYMOUS CONSTRUCT
    {
        $this->name = $name;
    }
    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloWorld->sayHello();