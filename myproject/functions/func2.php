<?php
require_once  '/var/www/html/myproject/webPages/header.php';
function calculationFactorial($n)
{
	if ($n == 0){
		$factorial = 1;
		return $factorial;
	}
	else {
	 	$factorial = $n * ($n - 1);
	}
	return $factorial;
}
$primer = calculationFactorial(10);
echo "Факториал числа 10 = " . $primer;
require_once  '/var/www/html/myproject/webPages/footer.php';