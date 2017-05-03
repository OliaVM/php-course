<?php 
require_once  '/var/www/html/myproject/webPages/header.php';
//Cоздать масив из n чисел, каждый элемент которого равен квадрату своего номера.
$array_of_numbers = [];
$x = count($array_of_numbers);
$x = 10; //задаем количество элементов массива
for ($i = 0; $i < $x; ++$i){
	$array_of_numbers[$i] = pow ($i, 2);
	echo $array_of_numbers[$i];
	echo "<br>";
}
require_once  '/var/www/html/myproject/webPages/footer.php'; 