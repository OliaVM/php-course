<?php
//Вычислите разницу между двумя датами, используя PHP ООП подход.
//Пример: Даты: 1981-11-03, 2013-09-04 
//Ожидаемый результат: Difference : 31 years, 10 months, 1 days 

//date_diff Возвращает разницу между двумя DateTime объектами

//Подход1
$datetime1 = date_create('1981-11-03');
$datetime2 = date_create('2013-09-04');
$interval = date_diff($datetime1, $datetime2);
echo "C 1981-11-03 по 2013-09-04  прошло " . $interval->format('%Y years, %m months, %d days');
// $interval->format('%Y years, %m months, %d days', %H hours, %i minutes, %s seconds
echo "<br>";

// ООП подход
$datetime1 = new DateTime('1981-11-03');
$datetime2 = new DateTime('2013-09-04');
$interval = $datetime1->diff($datetime2);
echo "C 1981-11-03 по 2013-09-04  прошло " . $interval->format('%Y лет, %m меясцев, %d дней');

