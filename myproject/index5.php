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
    
echo "<table border='1' cellpadding='5'>";

for ($i=0;$i<count($list);$i++) 
   
    {	
        echo "<tr>"; 
        
	for ($j=0;$j<count($row);$j++) 
		{ 
                echo "<td>";
               echo $list[$i][$j];
                echo "</td>";
                }
        
    
	echo "</tr>"; 
    }
echo "</table>"; 

?>
