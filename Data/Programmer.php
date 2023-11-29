<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackEndProgrammer extends Programmer
{

}

class FrontEndProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer; //POLYMORPHISMX  
}

function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackEndProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontEndProgrammer){
        echo "Hello FrontEnd Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer){
        echo "Hello  Programmer $programmer->name" . PHP_EOL;
    }
}  