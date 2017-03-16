<?php
/*echo "В Новосибирске прошло: ". (time()+7*60*60) . " секунд с 1-го января 1970 года";
echo "<br>";
echo "В Новосибирске прошло: ". echo mktime(23, 50, 0, 3, 16, 2017) " секунд с 1-го января 1970 года";
echo "<br>";
*/

//Выведите 1 марта 2025 года в формате timestamp
function GetAnyDate(){
		return mktime(0, 0, 0, 3, 1, 2025);
}
echo "1 марта 2025 года в формате timestamp " . GetAnyDate();
echo "<br>";

//Получаем любую дату в формате timestamp	
function GetAnyDate2($hour, $minute, $second, $month, $day, $year){
		$GetDate = mktime($hour, $minute, $second, $month, $day, $year);
		return $GetDate;
}
echo "23:50:00 20 марта 2017 года в формате timestamp " . GetAnyDate2(23, 50, 0, 3, 20, 2017);
