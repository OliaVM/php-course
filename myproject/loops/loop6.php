<?php
require_once  '/var/www/html/myproject/webPages/header.php';
//Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, 
//если сумма первых трех цифр в номере билета равна сумме последних трех цифр. 
//Найдите количество счастливых билетов и процент от общего числа билетов.
set_time_limit(1000);
$numberoflucky  = 0;
for ($i = 100000; $i <= 999999; $i++) {
    $biletSave = $i;    
    //echo "билет " .  $biletSave . "<br>";
    $bilet = str_split($i, 1); // получаем массив, сотоящиий из цифр числа 

// вычисляем сумму трех первых цифр
    $sum1 =  $bilet[0] + $bilet[1] + $bilet[2];
    //echo "sum1 " . $sum1 . "<br>";
// вычисляем сумму трех последних цифр
    $sum2 = $bilet[3]+ $bilet[4] + $bilet[5];
    //echo "sum2 " .  $sum2 . "<br>";
   
    if ($sum1 == $sum2) {
        $numberoflucky = $numberoflucky + 1;
        //echo "numberoflucky " . $numberoflucky . "<br>";
        echo "Счастливый билет = " . $biletSave . "<br>";
    } 
    //echo "<br>"; 
}
echo "Число счастливых билетов " . $numberoflucky . "<br>";
$procent = ($numberoflucky * 100)/999999;
echo "процент счастливых билетов " . $procent;
require_once  '/var/www/html/myproject/webPages/footer.php';
