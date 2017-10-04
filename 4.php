<?php

echo "Столбец ключей:<br>";
$arr = ["green"=>"зеленый", "red"=>"красный","blue"=>"голубой"];
foreach ($arr as $key=>$value) {
    echo $key."<br>";
}

echo "<br>Столбец элементов:<br>";
foreach ($arr as $value) {
    echo $value."<br>";
}