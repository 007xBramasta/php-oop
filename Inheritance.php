<?php

require_once "data/Manager.php";


$manager = new Manager(); 
$manager->name = "Bramasta";
$manager->sayHello("Kirana");

$vp = new VitePresident(); //Inheritance
$vp->name = "Nova";
$vp->sayHello("Ken");