<!--. Сделайте форму, которая спрашивает у пользователя дату в формате '2025-12-31T12:59:59'. 
С помощью функций mktime и explode переведите эту дату в формат timestamp. 
Узнайте месяц (словом) за введенную дату. Подсказка: explode следует применить трижды.-->
<?php
if(isset($_POST['dateStroka'])) {
  function getDateInFormat($dateStroka) {
    $datestroka = $_POST['dateStroka'];
    $arr = explode("T", $dateStroka);
    $arr1 = $arr[0];
    $arr2 = $arr[1];
    
    $arr1 = explode("-", $arr[0]);
    $year = $arr1[0];
    $month = $arr1[1];
    $day = $arr1[2];
    $arr2 = explode(":", $arr[1]);
    $hour = $arr2[0];
    $minute = $arr2[1];
    $second = $arr2[2];

    $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
    return $timestamp . "<br>";
  }
  echo getDateInFormat($_POST['dateStroka']);

  function getMonth($dateStroka) {
    $datestroka = $_POST['dateStroka'];
    $arr = explode("T", $dateStroka);
    $arr1 = $arr[0];
    $arr2 = $arr[1];

    $arr1 = explode("-", $arr[0]);
    $year = $arr1[0];
    $month = $arr1[1];
    $day = $arr1[2];
    $arr2 = explode(":", $arr[1]);
    $hour = $arr2[0];
    $minute = $arr2[1];
    $second = $arr2[2];
    $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
    return "Вы вввели месяц " . date('F', $timestamp); 
  }
  echo getMonth($_POST['dateStroka']);
}
?>
<html>
    <head>
        <title> </title>
    </head>
    <body>
    <form method="POST"> 
      Введите дату в формате '2025-12-31T12:59:59': <input type="text" name="dateStroka" size="23" maxlength="21" value="">
      <input type="submit" value="отправить год">
    </form>
    </body>
</html>

 



