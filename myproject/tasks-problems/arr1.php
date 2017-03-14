<?php
$arr1 = [];
$n = count($arr1);
$n = 10;
for ($i = 0; $i < $n; $i++) {
	$arr1[$i] = 0;
}
var_dump($arr1);
$arr2 = $arr1;
for ($i = 1; $i < count($arr2); $i+2) {
	$arr[$i] = 1;
}
var_dump($arr2);
