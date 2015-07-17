<?php

$link = mysqli_connect('mysql.hostinger.vn', 'u919349616_wbusr', '9p9tgaHcDeGQ');
if (!$link) {
    $output = 'Unable to connect to the database server.';
//    echo $output;
    exit();
}
if (!mysqli_select_db($link, 'u919349616_proj')) {
    $output = 'Could not find project database.';
//    echo $output;
    exit();
}

$output = 'Database connection established.';

// echo $output;
?>