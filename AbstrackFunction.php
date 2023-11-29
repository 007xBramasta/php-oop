<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Ruby";
$cat->run();

$dog = new Dog();
$dog->name = "Ruby";
$dog->run();