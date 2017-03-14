<?php
set_time_limit(10000);
	for ($bilet = 000001; $bilet < 1000000; $bilet++) {
    $bilet = str_split($bilet, 1); // получаем массив, 
//сотоящиий из цифр числа 
// вычисляем сумму трех первых цифр
    $sum1 =  $bilet[0] + $bilet[1] + $bilet[2];
// вычисляем сумму трех последних цифр
    $sum2 = $bilet[3]+ $bilet[4] + $bilet[5];
    $numberOfLucky  = 0;
    	if ($sum1 == $sum2) {
        	// $bilet = implode('', $bilet);
        	//echo "Счастливый билет" . $bilet . "<br>";
			$numberOfLucky = $numberOfLucky + 1;
        }  
	}
	echo "Число счастливых билетов" . $numberOfLucky; 
	$procent = ($numberOfLucky * 100)/999999;
?>

