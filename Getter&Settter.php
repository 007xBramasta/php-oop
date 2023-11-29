<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone"); //SET UNTUK MERUBAH
$category->setsExpensive(true);

echo "Name : {$category->getName()}" . PHP_EOL; //GET UNTUK MENGAMBIL DATANYA
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;