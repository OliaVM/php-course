<?php
/*echo "Прошло: ". time() . " секунд с 1-го января 1970 года";
echo "<br>";
$timeInHour = time() / (60 * 60);
echo "Прошло часов: ". "$timeInHour";
echo "<br>";
$timeInDay = time() / (60 * 60 * 24);
echo "Прошло дней: ". "$timeInDay";
echo "<br>";
$timeInYear = time() / (60 * 60 * 24 * 360);
echo "Прошло лет: ". "$timeInYear";
echo "<br>";
$timeInYearOur = 1970 + time() / (60 * 60 * 24 * 365);
echo "Сейчас: ". "$timeInYearOur";
echo "<br>";
//echo "Сейчас: ". date('d-m-Y H-i-s');
*/

function getTimeInCity($timezone){
	$timeInHour = time() / (60 * 60);
	$timeInOurCity = $timeInHour + $timezone;
	return $timeInOurCity;
}
echo "Время в Новосибирске (в часах, прошедших с 1-го января 1970 года) = ". getTimeInCity(7);
echo "<br>";
function getTime(){
	$x = time();
	return $x;
}
echo "Время в секундах, прошедших с 1-го января 1970 года = ". getTime();
