<?php
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14);
echo '<pre>';
print_r($array);
echo '<pre>';
// переставляем элементы случайным образом
shuffle($array);
echo '</pre>';
print_r($array);
echo '</pre>';
//Переставляем элементы  так, чтобы каждый оказался на новом месте
