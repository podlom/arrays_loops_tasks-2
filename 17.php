<?php

$arr = [1=>"Янв.","Фев.","Мрт.","Апр.","Май.","Июн.","Июл.","Авг.","Сен.","Окт.","Нояб.","Дек."];
$month = 10;
foreach ($arr as $key=>$value){
    if ($month == $key){
        echo "<b>".$value."</b><br>";
    } else{
        echo $value."<br>";
    }
}