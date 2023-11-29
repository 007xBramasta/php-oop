<?php

class Data implements IteratorAggregate //ITERATOR MANUAL
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

   /* public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        return new ArrayIterator($array);
    }*/

    public function getIterator(): Traversable //YIELD
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth; 
    }
}  

$data = new Data();

foreach ($data as $property => $value) { //FOREACH OTOMATIS ITERATOR
    echo "$property : $value" . PHP_EOL;
}