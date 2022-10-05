<?php

$jml = $_GET['jml'];
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{
    $total = 0;
    for ($x = 1; $x <= $a ; $x++) { 
        $total += $x;
    }

    echo "<th>Total :$total";
    echo "<tr>\n";
    
    for ($b = $a; $b > 0;$b--)
    {
        echo "<td>$b</td>";
    }
    echo "</tr>\n";
    echo "</th>\n";

}
echo "</table>";

?>