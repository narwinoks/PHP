<?php

//setTimzone();
$dateTime = new DateTime();
$dateTime->setDate(2020, 12, 20);
$dateTime->setTime(10, 10, 10);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);
var_dump($dateTime);

//TIME ZONE
$now = new DateTime();
$now->setTimezone(new DateTimeZone("UTC"));
var_dump($now);

//FORMAT TIMEZONE
$format = new DateTime();
echo $format->format("Y-m-d H:i:s") . PHP_EOL;

//PARSE FORMAT
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2019-10-11 19:00:11", new DateTimeZone("Asia/Jakarta"));
echo "DATE CREATE FORMAT $date" . PHP_EOL;
if ($date) {
    var_dump($date);
} else {
    echo "Date Failed";
}