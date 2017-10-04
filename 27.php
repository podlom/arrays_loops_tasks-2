<?php

$rows=5;
$cols=5;
$colors = ["red", "yellow", "blue", "gray", "maroon", "brown", "green"];

echo "<table>";
for($tr=1; $tr<=$rows; $tr++){
    echo "<tr>";
    for($td=1; $td<=$cols; $td++){
        $number=rand(100000,9000000);
        $i=$colors[rand(0,count($colors)-1)];
        echo "<td style='background-color: $i'>".$number."</td>";
    }
    echo "</tr>";
}
echo "</table>";
