<?php
//Упорядочить значения массива по возрастанию. 
$array = array(1, 6, 8, 4483, 6, 99 , 85, 111);
//$array = array('1', '2', '4', '8', '4', '2', '5');
$counter = count($array) - 1;
for ($i = 0; $i < count($array); $i++)	{
    for ($j = 0; $j < $counter; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $x = $array[$j]; 
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $x;
        }
    }
}
echo "<pre>";
print_r ($array);
echo "<pre>";	
echo "<br>";	

//Другой способ
$array2 = array('1', '2', '4', '4', '2', '5');
asort($array2);
echo "<pre>";
print_r ($array2);
echo "<pre>";
