<?php

require_once "data/Person.php";

$person = new Person("Bramasta", "Malang"); //PROPERTIE
$person->name = "Bramasta";
$person->address = "Malang";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Kirana", "Watulimo");
$person->name = "Kirana";
$person->address = "Watulimo"; //default value


var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

//error
//$person2->name = [];