<?php

require_once "data/SayGoodbye.php";

use Data\Traits\{Person, SayGoodbye, SayHello};

$person = new Person();
$person->goodBye("Bramasta");
$person->hello("Kirana");

$person->name = "Albatio"; //memanngil properties HasName
var_dump($person);

$person->run();