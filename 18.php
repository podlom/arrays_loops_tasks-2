<?php

$arr = [1=>"пн.", "вт.", "ср.", "чт.", "пт.", "сб.", "вс."];
foreach ($arr as $key=>$value){
    if ($key == 6 || $key == 7){
        echo "<b>".$value."</b><br>";
    } else{
        echo $value."<br>";
    }
}