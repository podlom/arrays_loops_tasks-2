<?php

for ($i=0; $i<10; $i++){
    $arr[] = rand(1,100);
}
echo "<pre>";
echo "<br><b>Первоначальный вид массива:</b><br><br>";
print_r($arr);

$big = 0;
foreach ($arr as $key=>$value){
    if ($value > $big){
        $big = $value;
        $big_key = $key;
    }
}

$small = $big;
foreach ($arr as $key=>$value){
    if ($value < $small){
        $small = $value;
        $small_key = $key;
    }
}
$arr[$big_key] = $small;
$arr[$small_key] = $big;
echo "<br><b>Перестановка максимального и минимального значения массива:</b><br><br>";
print_r($arr);
echo "<br>";
echo "Максимальное значение = ".$big."<br>";
echo "Минимальное значение = ".$small."<br>";
echo "Поменяны местами значения в индексах №".$big_key." и №".$small_key;

