<?php

$day = 2;
$arr = [1=>"пн.", "вт.", "ср.", "чт.", "пт.", "сб.", "вс."];
foreach ($arr as $key=>$value){
    if ($day == $key){
        echo "<i>".$value."</i><br>";
    } else{
        echo $value."<br>";
    }
}