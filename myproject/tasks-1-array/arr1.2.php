<?php
$arr1 = array(); 
$n = count($arr1);
$n = 18;
for ($i = 0; $i < $n; $i++) {
	if ($i % 2 == 0) {
		$arr1[$i] = 0;
	}
	else {
		$arr1[$i] = 1;
	}
}
echo "<pre>";
print_r ($arr1);
echo "<pre>";

