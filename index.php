<?php
$file = 'users.json';

$json = file_get_contents($file);
$arrAsoc = json_decode($json, true);

echo "<table border='1'>";
echo "<tbody>";
foreach ($arrAsoc as $arr)
{
    foreach ($arr as $key => $value)
    {
        echo "<tr>";
        echo "<td>$key</td>";
        echo "<td>$value</td>";
        echo "</tr>";
    }
}
echo "</tbody>";
echo "</table>";