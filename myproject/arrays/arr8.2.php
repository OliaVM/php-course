<?php
$arr = array(2, 6, 6, 99 ,2, 1, 23, 7, 1, 6);
echo "Полный массив";
var_dump($arr); 
$uniq_arr = array();
foreach ($arr as $element) {
    if (!in_array($element, $uniq_arr)) {
        $uniq_arr[] = $element;
    }
}
echo "Массив, из которого удалили повторявшиеся элементы";
var_dump($uniq_arr); 

