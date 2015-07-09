<?php

// Input is a Datetime variable, output is a Datetime variable
function nextWD($datein) {
    $tempdate = $datein->format("Y-m-d");
    $weekDay = date('w', strtotime($tempdate));

    if ($weekDay == 0) {
        $datein->modify('+1 day');
    } elseif ($weekDay == 6) {
        $datein->modify('+2 day');
    }
    return $datein;
}
?>