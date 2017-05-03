<?php
require_once  '/var/www/html/myproject/webPages/header.php';
//Выведите  10 раз фразу "Hello" 
$n = 1;
while ($n < 11) {
	echo "Hello". "<br>";
	$n = ++$n;
}
require_once  '/var/www/html/myproject/webPages/footer.php';
