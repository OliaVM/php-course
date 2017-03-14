<?php
$arr = array(1, 6, 8, 4483, 6, 99 ,85);
echo "Исходный массив";
var_dump($arr);
unset($arr[3]);
echo "Массив после вычеркивания одного ээлемента";
var_dump($arr);
$b = 0;
for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] > $b) {
		$b = $arr[$i];
	}
	
	else if ($arr[$i] <= $b) {
		echo "Массив не упорядочен по возрастанию";
	}
}

