<?php

$arr = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($arr as $value){
    $result = $result + ($value*$value);
}
echo "Сумма квадратов элементов = ".$result;