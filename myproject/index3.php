

<?php

$handle = fopen("file.txt", "r");

$list = [];

if ($handle) {
	while (($buffer = fgets($handle, 4096)) !== false) {
		$row = explode(";", $buffer);
		$list[] = $row;
	    }

	if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}

echo "<pre>";
print_r($list);
echo "</pre>";
    


?>