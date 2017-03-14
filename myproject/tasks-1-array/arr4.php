<?php
$arr1 = array(4, 7 , 8, 4444, 5 ,6 ,33, 55, 48, 30, 4444);
$x = count($arr1);
var_dump($arr1);
$arr2 = array_unique($arr1);
$y = count($arr2);
if ($x = $y) {
	echo "В массиве есть повторяющиеся элементы";
}


