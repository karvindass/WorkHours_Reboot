<?php

$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    $output = 'Unable to connect to the database server.';
    echo $output;
    exit();
}
if (!mysqli_select_db($link, 'workhours1')) {
    $output = 'Could not find workhours database.';
    echo $output;
    exit();
}

$output = 'Database connection established.';

// echo $output;
?>