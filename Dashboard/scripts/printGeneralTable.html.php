<?php
    foreach ($projects as $project)
{
    echo "<tr>";
    echo '<td>' . $project['title'] . '</td>';
    echo '<td>' . $project['client'] . '</td>';
    echo '<td>' . $project['sumwh'] . '</td>';
    echo "</tr>";
}
?>