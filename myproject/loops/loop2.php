<?php
//Найти сумму  1+4+7+10+...+112. 
$a = 1;
$b = 3;
$sum = 1;
while ($a < 112) {
	$a = $a + $b;
	$sum = $a + $sum; 
}
echo $sum;


