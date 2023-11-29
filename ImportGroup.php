<?php

require_once "data/Conflict.php"; 
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1,Conflict as Conflict2, Dummy, Sample};
use function Helper\{helpMe as help};
use const Helper\{APPLICATION as APP};

$conflict = new Conflict1();
$conflict = new Conflict2(); 
$dummy = new Dummy();
$sample = new Sample();
help();
echo APP;