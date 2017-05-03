<?php
require_once  '/var/www/html/myproject/webPages/header.php';
//Напишите класс, который сортирует числа внутри массива (используя функции sort()).
//Например: Входящий массив : array(11, -2, 4, 35, 0, 8, -9)
//Вывод : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
class ArraySort 
{
	public $arr;
	function getSort() {
		sort($this->arr);
		return $this->arr;
	}	
}
$object = new ArraySort;
$object->arr = array(11, -2, 4, 35, 0, 8, -9);
var_dump($object->getSort());
echo "<br>";

//Способ2
class ArraySort2 
{
	function getSort2($arr2) {
		sort($arr2);
		return $arr2;
	}	
}
$object2 = new ArraySort2;
var_dump($object2->getSort2(array(11, -2, 4, 35, 0, 8, -9)));
require_once  '/var/www/html/myproject/webPages/footer.php';