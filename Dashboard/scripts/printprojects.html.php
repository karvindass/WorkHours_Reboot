<?php
foreach ($projects as $project)
{
    echo "<blockquote>";
    echo '<h1>' . $project['title'] . '</h1>';
    echo '<b>  Starting on: </b>' . $project['startdate'] . '<br>';
    echo '<b>  Client: </b>' . $project['client'] . '<br>';

    echo "<br> </blockquote>";
}
?>