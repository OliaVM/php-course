<?php
//Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.

if (!function_exists('cal_days_in_month')) 
{ 
    function cal_days_in_month($calendar, $month, $year) 
    { 
        return date('t', mktime(0, 0, 0, $month, 1, $year)); 
    } 
} 

echo "В марте " . cal_days_in_month(CAL_GREGORIAN, 3, 2017) . " дней" . "<br>";
echo "В апреле " . cal_days_in_month(CAL_GREGORIAN, 4, 2017) . "<br>";
echo "В мае " . cal_days_in_month(CAL_GREGORIAN, 5, 2017);