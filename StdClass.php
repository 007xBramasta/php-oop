<?php

$array= [
    "firstName" => "Bramasta",
    "middleName" => "Albatio",
    "lastName" => "Haryono"
];

$object = (object)$array; //ARRAY TO OBJECT

var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object; //OBJECT TO ARRAY
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Bramasta", "Trenggalek");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);