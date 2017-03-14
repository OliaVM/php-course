<?php
$VInMetersPerSecond = 1;
function speed($S, $t){
	$V = array();
	$V[] = $S / $t;
	$V[] = ($S / $t) * 3.6; 
	return $V;
}

$V1 = speed(1000, 8);
echo "Скорость движения машины в км/ч = " . $V1[0];
echo "<br>";
echo "Скорость движения машины в м/с = " . $V1[1];
