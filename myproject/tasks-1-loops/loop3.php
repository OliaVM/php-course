<?php

for ($num = 0; $num < 10000; ++$num) {
	if(preg_match('/3/', $num)){
       
       $mod = $num%5;
       if ($mod != 0) {
       echo $num;
       echo "<br>";
       } 

    } 
 }
    
?>