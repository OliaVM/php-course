<?php
//Найдите сумму и произведение элементов массива.
$array_of_numbers = array('12', '14', '5', '9', '11', '86', '47', '528', '63', '4');
$sum = 0;
$proizv = 1;
for ($i = 0; $i < count($array_of_numbers); ++$i){
	$b = $array_of_numbers[$i];
	$sum = $sum + $b;
	$proizv = $proizv * $b;
}
    echo "sum = " . $sum;
	echo "<br>";
	echo "proizv = " . $proizv;
	echo "<br>";
//Способ2: с помощью стандартных функций 
	echo "sum2 = " . array_sum($array_of_numbers);
	echo "<br>";
	echo "proizv2 = " . array_product($array_of_numbers);
