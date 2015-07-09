<?php

foreach ($projects as $project) {
    echo "<tr>";
    echo '<td>' . $project['title'] . '</td>';
    echo '<td>' . $project['client'] . '</td>';
    echo '<td>' . $project['startdate'] . '</td>';
    echo '<td>' . $project['whperday'] . '</td>';
    echo '<td>' . $project['enddate'] . '</td>';
    echo '<td>' . $project['sumwh'] . '</td>';
    echo "</tr>";
}
?>