<?php

include_once 'scripts/nextWeekday.php';

$Day1 = date("Y-m-d"); //Can be changed in the future
$Day1a = new Datetime($Day1);
$Day1a = nextWD($Day1a);
$Day1 = $Day1a->format("Y-m-d");
$Day1s = $Day1a->format("D j M, Y");

$Day2date = new DateTime($Day1);
$Day2date->modify('+1 day');
$Day2date = nextWD($Day2date);
$Day2 = $Day2date->format("Y-m-d");
$Day2s = $Day2date->format("D j M, Y");

$Day3date = new DateTime($Day2);
$Day3date->modify('+1 day');
$Day3date = nextWD($Day3date);
$Day3 = $Day3date->format("Y-m-d");
$Day3s = $Day3date->format("D j M, Y");

$Day4date = new DateTime($Day3);
$Day4date->modify('+1 day');
$Day4date = nextWD($Day4date);
$Day4 = $Day4date->format("Y-m-d");
$Day4s = $Day4date->format("D j M, Y");

$Day5date = new DateTime($Day4);
$Day5date->modify('+1 day');
$Day5date = nextWD($Day5date);
$Day5 = $Day5date->format("Y-m-d");
$Day5s = $Day5date->format("D j M, Y");

// Finds gets next day (nextWD() is contained inside
// Must take in string of format Y-m-d, no return values
function nextD($datein) {
    $DayOutdate = new DateTime($datein);
    $DayOutdate->modify('+1 day');
    $DayOutdate = nextWD($DayOutdate);
    $DayOut = $DayOutdate->format("Y-m-d");
    return $DayOut;
}

// Finds gets next day (nextWD() is contained inside
// Must take in string of format Y-m-d, no return values
function nextDs($datein) {
    $DayOutdate = new DateTime($datein);
    $DayOutdate->modify('+1 day');
    $DayOutdate = nextWD($DayOutdate);
    $DayOuts = $DayOutdate->format("D j M, Y");
    return $DayOuts;
}
?>