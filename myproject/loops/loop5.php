<?php
require_once  '/var/www/html/myproject/webPages/header.php';
//Даны натуральные числа от 35 до 87. 
//Вывести на консоль те из них, которые при делении на 7 дают остаток 1, 2 или 5.
for ($x = 35; $x <= 87; $x++) {
	$mod = $x % 7;
	if (($mod == 1) || ($mod == 2) || ($mod == 5)) {
    	echo $x;
    	echo "<br>";
    }
}
require_once  '/var/www/html/myproject/webPages/footer.php';
