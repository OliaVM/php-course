<?php
//Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен
function GetAnyDate($hour, $minute, $second, $month, $day, $year){
		$GetDate = mktime($hour, $minute, $second, $month, $day, $year);
		return $GetDate;
}
echo "00:00:00 31 декабря 2017 года в формате timestamp " . GetAnyDate(0, 0, 0, 12, 31, 2017);
echo "<br>";
echo "00:00:00 31 декабря 2017 года в формате timestamp (способ2) " . mktime(0, 0, 0, 12, 31);