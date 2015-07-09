<?php

include 'connectdb.php';

if (isset($_POST['submit'])) {
    $projectTitle = trim($_POST['projectTitle']);
    $clientID = $_POST['clientID'];
    $payOrder = $_POST['payOrder'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $sumWH = $_POST['sumWH'];
    $comments = trim($_POST['comments']);

    //Maths section
    include 'countWorkDays.php';
    include 'holidaysArray.php';
    $workPeriod = getWorkingDays($startDate, $endDate, $holidays);
    $dayWH = ceil($sumWH / $workPeriod);

    //Adding Project to Database
    $posting = "INSERT INTO projects "
            . "(`title`, `startdate`, `enddate`, `clientid`, `sumwh`, `whperday`, `payorder`, `comments`)"
            . " VALUES ('" . $projectTitle . "', '" . $startDate . "', '" . $endDate . "', '"
            . $clientID . "', '" . $sumWH . "', '" . $dayWH . "', '" . $payOrder . "', '" . $comments . "')";

    if (!mysqli_query($link, $posting)) {
        echo 'Oops, something went wrong :o, check what you entered';
        exit();
    }

}
?>