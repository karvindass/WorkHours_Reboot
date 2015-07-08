<?php

$Day1 = date("Y-m-d");
$Day1s = date("D j M, Y");

$Day2date = new DateTime($Day1);
$Day2date->modify('+1 day');
$Day2 = $Day2date->format("Y-m-d");
$Day2s = $Day2date->format("D j M, Y");

$Day3date = new DateTime($Day2);
$Day3date->modify('+1 day');
$Day3 = $Day3date->format("Y-m-d");
$Day3s = $Day3date->format("D j M, Y");

$Day4date = new DateTime($Day3);
$Day4date->modify('+1 day');
$Day4 = $Day4date->format("Y-m-d");
$Day4s = $Day4date->format("D j M, Y");

$Day5date = new DateTime($Day4);
$Day5date->modify('+1 day');
$Day5 = $Day5date->format("Y-m-d");
$Day5s = $Day5date->format("D j M, Y");
?>