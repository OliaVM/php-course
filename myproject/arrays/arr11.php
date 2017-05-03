<?php
require_once  '/var/www/html/myproject/webPages/header.php';
$arr = array();
for ($i = 0; $i < 10; $i++) {
	$arr[$i] = rand(-100, 100);
}
echo "Массив без 0";
var_dump($arr);
	for ($i = 0; $i < count($arr); $i++) {
		$arr2[] = $arr[$i]; 
		if ($arr[$i] < 0 ) { 
			$arr2[] = 0; 
		} 
	}
echo "Массив с 0 после отрицательных  элементов";
var_dump($arr2);
require_once  '/var/www/html/myproject/webPages/footer.php';