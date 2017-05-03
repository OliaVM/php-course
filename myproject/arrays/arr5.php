<?php
require_once  '/var/www/html/myproject/webPages/header.php'; 
$arr = array();
for ($i=0; $i<=10; $i++) {
    $arr[] = rand(0, 30);
}
 
echo "<pre>";
print_r($arr);
echo "<pre>";
 
$min = min($arr); //находим минимальное значение в массиве
$max = max($arr); //находим максимальное значение в массиве
 
$keyMin = array_search($min, $arr); //находим индекс 
//минимального элемента массива arr
$keyMax = array_search($max, $arr);//находим индекс 
//максимального элемента массива arr

// Помещаем на место минимального элемента максимальный 
// Помещаем на место максимального элемента минимальный   
$arr[$keyMin] = $max; 
$arr[$keyMax] = $min;
 
echo "<pre>";
print_r($arr);
echo "<pre>";
require_once  '/var/www/html/myproject/webPages/footer.php';


