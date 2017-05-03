<?php
require_once  '/var/www/html/myproject/webPages/header.php';
//Определите, можно ли вычеркнуть из данного массива одно число так, 
//чтобы оставшиеся числа оказались упорядоченными по возрастанию.
$arr = array(1, 6, 8, 4483, 6, 99 ,85);
echo "Исходный массив";
var_dump($arr);
unset($arr[3]);
echo "Массив после вычеркивания одного элемента";
var_dump($arr);
for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] > $arr[$i + 1]) {
		echo "Массив не упорядочен по возрастанию";
		break;
	}
}
require_once  '/var/www/html/myproject/webPages/footer.php';
