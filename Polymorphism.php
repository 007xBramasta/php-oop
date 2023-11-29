<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Bramasta");
var_dump($company);

$company->programmer = new BackEndProgrammer("Albatio");
var_dump($company);

$company->programmer = new FrontEndProgrammer("Kirana");
var_dump($company);

sayHelloProgrammer(new Programmer("Bramasta"));
sayHelloProgrammer(new BackEndProgrammer("Albatio"));
sayHelloProgrammer(new FrontEndProgrammer("Kirana"));