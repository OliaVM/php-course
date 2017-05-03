<?php
require_once  '/var/www/html/myproject/webPages/header.php';
//Определите, есть ли в массиве повторяющиеся элементы.
$array = array(4, 7 , 8, 4444, 5 ,6 ,33, 55, 48, 30, 4444);
$count_array = count($array); //выясняем количество элементов начального массива
var_dump($array);
$array_new = array_unique($array); //удаляем повторяющиеся  элементы
$count_array_new = count($array_new); //выясняем количество элементов нового массива
var_dump($array_new);
if ($count_array = $count_array_new) { //сопоставляем число элементов старого массива и нового
	echo "В массиве есть повторяющиеся элементы";
}
require_once  '/var/www/html/myproject/webPages/footer.php';


