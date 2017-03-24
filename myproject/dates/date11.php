
<?php
function getDay() {
return date('d');
}
echo "номер текущего дня от начала месяца " . getDay() . "<br>";

function getAnyDay($hour, $minute, $second, $month, $day, $year) {
return date('d', mktime($hour, $minute, $second, $month, $day, $year));
}
echo "номер текущего дня от начала месяца (способ2) " . getAnyDay(18, 0, 0, 3, 18, 2017);