<?php
$mas = array('12', '14', '5', '9', '11', '86', '47', '528', '63', '4');
$sum = 0;
$proizv = 1;
for ($i=0; $i<count($mas); ++$i){
	$b = $mas[$i];
	$sum = $sum + $b;
	$proizv = $proizv * $b;
}
    echo "sum = " . $sum;
	echo "<br>";
	echo "proizv = " . $proizv;
	echo "<br>";
	echo "sum2 = " . array_sum($mas);
	echo "<br>";
	echo "proizv2 = " . array_product($mas);

?>