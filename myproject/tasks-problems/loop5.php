<?php
for ($x = 35; $x <= 87; $x++) {
	$mod = $x%7;
	if (($mod = 1) || ($mod = 2) || ($mod = 5)) {
    	echo $x;
    	echo "<br>";
    }
}


?>