<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Bram";
$manager->sayHello("Kirana");

$vp = new VitePresident();
$vp->name = "Tio";
$vp->sayHello("Kirana");