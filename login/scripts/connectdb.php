<?php

$link = mysqli_connect('198.57.247.206:3306', 'karvinda_user', 'Shyf1FBvWU4q');
if (!$link) {
    $output = 'Unable to connect to the database server.';
//    echo $output;
    exit();
}
if (!mysqli_select_db($link, 'karvinda_workhours1')) {
    $output = 'Could not find projct database.';
//    echo $output;
    exit();
}

$output = 'Database connection established.';

 echo $output;
?>