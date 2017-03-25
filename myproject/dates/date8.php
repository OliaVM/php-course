<?php
//С помощью функций mktime и date выведите 13 февраля 2015 года в формате '31.12.2025'.
function GetAnyDate($hour, $minute, $second, $month, $day, $year){
	$GetAnyDate = date('d.m.Y', mktime($hour, $minute, $second, $month, $day, $year));
	return $GetAnyDate;
}
$GetAnyDatePrimer = GetanyDate(0, 0, 0, 2, 13, 2015);
echo $GetAnyDatePrimer;
