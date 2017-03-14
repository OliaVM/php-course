<?php
$array1 = array(1, 4, 6, 9, 16, 18);
$array2 = array(33, 38, 51, 74, 88, 340);
$result = array_merge($array1, $array2);
echo "Объединенный массив";
var_dump($result);
//echo "Упорядоченный объединенный массив";
//$result2 = asort($result);
//var_dump($result2);

