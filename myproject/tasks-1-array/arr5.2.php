<?php
 
$arr = array();
for ($i=0; $i<=10; $i++) {
    $arr[] = rand(0, 30);
}
 
echo "<pre>";
print_r($arr);
echo "<pre>";
 
$min = 0;
$max = 0;
for ($i=0; $i<=10; $i++) {
    if ($arr[$i] > $arr[$max]) {
      $max = $i;
    }
}
echo "Индекс максимального элемента = " . $max . "<br>";
for ($i=0; $i<=10; $i++) {
    if ($arr[$i] < $arr[$min]){
      $min = $i;
    }
}
echo "Индекс минимального элемента = " . $min. "<br>";

  $a = $arr[$max];
  $arr[$max] = $arr[$min];
  $arr[$min] = $a;

echo "<pre>";
print_r($arr);
echo "<pre>";
 
?>

