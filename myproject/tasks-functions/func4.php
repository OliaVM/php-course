<?php
function handler($file, $separator)
{
	$handle = fopen($file, "r+");
	$list = [];
	if ($handle !== false) {
	    while (($buffer = fgets($handle, 4096)) !== false) {
	        $row = explode($separator, $buffer);//преобразуем строку в массив
	        $list[] = $row;
	    }
	    if (!feof($handle)) { //Проверяем достигнут ли конец файла
	        echo "Error: unexpected fgets() fail\n";
	    }
	    fclose($handle);
	}
	return $list;
}
$list1 = handler("filebooks.txt", "|");
echo "<pre>";
print_r($list1);
echo "<pre>";
