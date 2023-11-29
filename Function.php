<?php

require_once "data/Person.php";

$bram = new Person("Bramasta",  ""); //THIS
$bram->name = "Bram"; //THIS NAME DARI PERSON
$bram->sayHello("Kirana");

$nova = new Person("Kirana", "Watulimo");
$nova->name = "Nova";
$nova->sayHello(null);

$bram->info(); //DARI CONSTANT SELF KEYWOARD PERSON
$nova->info();