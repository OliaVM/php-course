<?php
//Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'
function GetDate1(){
	return date('Y-m-d') . "<br>";	
}
echo GetDate1();

function GetDate2(){
	return date('d.m.Y');
}
echo GetDate2() . "<br>";

function GetDate3($timezoneInCity){
	return date('H:i:s', time() + ($timezoneInCity *60 * 60));
}
echo GetDate3(7);
