<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

//echo $product->name . PHP_EOL; //ERROR KARENA PRIVATE CLASS
//echo $product->price . PHP_EOL; //ERROR KARENA PRIVATE CLASS

echo $product->getName() . PHP_EOL; //MENGAKSES FUNCTION
echo $product->getPrice() . PHP_EOL;

$dummy= new ProductDummy("Dummy", 200);
$dummy->info();