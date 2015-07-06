<?php
foreach ($projects as $project)
{
    echo "<blockquote>";
    echo '<h3>' . $project['title'] . '</h1>';
    echo '<strong>  Starting on: </strong>' . $project['startdate'] . '<br>';
    echo '<strong>  Client: </strong>' . $project['client'] . '<br>';
    echo "<br> </blockquote>";
}
?>