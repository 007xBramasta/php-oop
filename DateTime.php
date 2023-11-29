<?php

$dataTime =  new DateTime();
$dataTime->setDate(2023, 6, 26);
$dataTime->setTime(10, 10, 10, 0);

$dataTime->add(new DateInterval("P1Y")); //NAMBAH SATU TAHUN

$minusOneMonth =  new DateInterval("P1M"); //MENGURANGI SATU BULAN
$minusOneMonth->invert = true;
$dataTime->add($minusOneMonth);

var_dump($dataTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("Asia/Jakarta")); //MERUBAH TIMEZONE
var_dump($now);

$string = $now->format("Y-m-d H:i:s"); //MERUBAH FORMAT WAKTU SAAT INI
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta")); //
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}