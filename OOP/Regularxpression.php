<?php
//preg_match_all
$matches = array();
$result = (bool)preg_match_all("/eko|awan|edy/i", "EKO KURNIAWAN KANDDEDY", $matches);
var_dump($result);
var_dump($matches);

//preg replace
$result = preg_replace("/anjing|bangsat/", "***", "anjing bangsat");
var_dump($result);

//preg split
$result = preg_split("/[\s,-]/" ,"EKO KURNIAWAN KANDEDY PROOGAMMER ZAMAN NOW ,HDHAGA-NAHHA ,HAGAGH-BAHGA");
var_dump($result);
