<?php
//Вывести 3 случайных числа от 0 до 100 без повторений
$num1 = 0;
$num2 = 0;
$num3 = 0; 
if (($num1 == $num2) || ($num2 == $num3) || ($num3 == $num1) || ($num3 == $num2 = $num1)) {
   $num1 = rand(0, 100);
   $num2 = rand(0, 100);
   $num3 = rand(0, 100); 
}
echo $num1 . "<br>";
echo $num2 . "<br>";
echo $num3 . "<br>";


