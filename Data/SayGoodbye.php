<?php

namespace Data\Traits;

trait sayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Goodbye" . PHP_EOL;
        }else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait sayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        }else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName //Properties Traits
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson{

    public function  goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }    

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait All {
    use sayGoodBye, sayHello, HasName, CanRun{
        // hello as private ; bisa override visibility private protected dan public
        // goodbye as private;
    } //ditambahkan Propertie HasName
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
    
}
