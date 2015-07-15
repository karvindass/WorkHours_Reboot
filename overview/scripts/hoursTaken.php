<?php

function callHours($callDate) {
    include '../Dashboard/scripts/connectdb.php';
    $query = "SELECT SUM(whperday) "
            . "AS daySum "
            . "FROM projects "
            . "WHERE startdate <= '" . $callDate
            . "' AND enddate >= '" . $callDate . "' AND username = '" . $_SESSION['login_user'] . "'";

    $result = mysqli_query($link, $query);
    if (!$result) {
        $error = 'Error fetching projects:' . mysqli_error($link);
        echo $error;
    }
    $dayWHvar = mysqli_fetch_array($result);
    $daySum = $dayWHvar['daySum'];

    return $daySum;
}

?>