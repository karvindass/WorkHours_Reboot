<?php

include_once 'connectdb.php';

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
        $errorPop = '<div class="alert alert-dismissible alert-danger">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<strong>Oh snap!</strong> <a href="#" class="alert-link">Make sure you put the right things in the inputs</a>'
                . 'and try submitting again.'
                . '</div>';
        echo $errorPop;
        exit();
    }
    else {
        echo '<div class="col-xs-6">
            <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>' . $projectTitle . '</strong> has been successfully added.
            </div>
            </div>';
    }
}
?>