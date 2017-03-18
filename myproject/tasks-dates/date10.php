<?php
// Создайте массив месяцев $month. 
Function getNameOfMonth($hour, $minute, $second, $month, $day, $year) {
	$dateNow = date('m', mktime($hour, $minute, $second, $month, $day, $year)) . "<br>"; 
	$month = array(01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12);
	for ($i = 0; $i < 12; $i++) {
		if ($month[$i] == $dateNow) {
			switch ($i) {
				case 0:
				$NameOfMonth = "январь";
				break;
				case 1:
				$NameOfMonth = "февраль";
				break;
				case 2:
				$NameOfMonth = "март";
				break;
				case 3:
				$NameOfMonth = "апрель";
				break;
				case 4:
				$NameOfMonth = "май";
				break;
				case 5:
				$NameOfMonth = "июнь";
				break;
				case 6:
				$NameOfMonth = "июль";
				break;
				case 7:
				$NameOfMonth = "август";
				break;
				case 8:
				$NameOfMonth = "сентябрь";
				break;
				case 9:
				$NameOfMonth = "октябрь";
				break;
				case 10:
				$NameOfMonth = "ноябрь";
				break;
				case 11:
				$NameOfMonth = "декабрь";
				break;
			}
		}
	}
	return $NameOfMonth;
}

//Выведите на экран название текущего месяца с помощью массива $month и функции date.
echo "Сейчас месяц " . getNameOfMonth(0, 0, 0, 3, 17, 2017);

//Узнаем какой месяц был 
/*
echo date('m', mktime(0, 0, 0, 1, 13, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 2, 14, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 3, 15, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 4, 16, 2017)) . "<br>";  
echo date('m', mktime(0, 0, 0, 5, 17, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 6, 18, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 7, 13, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 8, 14, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 9, 15, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 10, 16, 2017)) . "<br>";  
echo date('m', mktime(0, 0, 0, 11, 17, 2017)) . "<br>"; 
echo date('m', mktime(0, 0, 0, 12, 18, 2017));
*/

