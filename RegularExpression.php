<?php

$matches = [];
$result = preg_match_all("/bram|tio|yono/i", "Bramasta Albatio Haryono", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT");
var_dump($result);

$result = preg_split("/[\s,-]/", "Bramasta Albatio Haryono,Programmer BackEnd");
var_dump($result);