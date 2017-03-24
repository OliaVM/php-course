<?php
//Создайте массив дней недели $week. 

Function getDayOfWeek($hour, $minute, $second, $month, $day, $year) {
	$dateNow = date('w', mktime($hour, $minute, $second, $month, $day, $year)) . "<br>"; 
	$week = array(1, 2, 3, 4, 5, 6, 0);
	for ($i = 0; $i < 7; $i++) {
		if ($week[$i] == $dateNow) {
			switch ($i) {
				case 0:
				$dayOfWeek = "понедельник";
				break;
				case 1:
				$dayOfWeek = "вторник";
				break;
				case 2:
				$dayOfWeek = "среда";
				break;
				case 3:
				$dayOfWeek = "четверг";
				break;
				case 4:
				$dayOfWeek = "пятница";
				break;
				case 5:
				$dayOfWeek = "суббота";
				break;
				case 6:
				$dayOfWeek = "воскресенье";
				break;
			}
		}
	}
	return $dayOfWeek;
}
//Выведите на экран название текущего дня недели с помощью массива $week и функции date. 
echo getDayOfWeek(0, 0, 0, 3, 17, 2017) . "<br>";
// Узнайте какой день недели был 06.06.2006, в ваш день рождения.
echo getDayOfWeek(0, 0, 0, 6, 6, 2006) . "<br>";
echo getDayOfWeek(0, 0, 0, 3, 10, 1991) . "<br>";

//Узнаем какой день недели был 
/*
echo date('w', mktime(0, 0, 0, 3, 13, 2017)) . "<br>"; 
echo date('w', mktime(0, 0, 0, 3, 14, 2017)) . "<br>"; 
echo date('w', mktime(0, 0, 0, 3, 15, 2017)) . "<br>"; 
echo date('w', mktime(0, 0, 0, 3, 16, 2017)) . "<br>";  
echo date('w', mktime(0, 0, 0, 3, 17, 2017)) . "<br>"; 
echo date('w', mktime(0, 0, 0, 3, 18, 2017)) . "<br>"; 
echo date('w', mktime(0, 0, 0, 3, 19, 2017)); 
*/

