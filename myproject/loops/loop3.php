<?php
require_once  '/var/www/html/myproject/webPages/header.php';
//Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 
//и которые не делятся на 5
for ($num = 0; $num < 10000; ++$num) {
	if(preg_match('/3/', $num)){
       $mod = $num % 5;
       if ($mod != 0) {
       echo $num;
       echo "<br>";
       } 
    } 
}
require_once  '/var/www/html/myproject/webPages/footer.php';