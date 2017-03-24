<?php
//Выведите на экран текущий год, день, месяц, час, минуту, секунду.
function GetFullNowDateInCity($timezoneInCity){
		$FullNowDateInCity = date('Y\\й \г\о\д d\\й \д\е\н\ь m\\й м\е\с\я\ц H\\й ч\а\с i\\я м\и\н\у\т\а s\\я с\е\к\у\н\д\а', (time()+$timezoneInCity*60*60));
	return $FullNowDateInCity;;
}
//echo "Сейчас: ". date('d-m-Y H-i-s') . "<br>";
$datePrimer = GetFullNowDateInCity(7);
echo "Сейчас: ". $datePrimer;