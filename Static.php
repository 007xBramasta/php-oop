<?php

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Bramasta Albatio" . PHP_EOL;
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;