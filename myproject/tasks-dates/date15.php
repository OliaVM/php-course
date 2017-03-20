<!--. Сделайте форму, которая спрашивает дату в формате '2025-12-31'. 
С помощью функций mktime и explode переведите эту дату в формат timestamp. 
Узнайте месяц (словом) за введенную дату..-->
<?php
if(isset($_POST['dateStroka'])) {
  function getDateInFormat($dateStroka) {
    $datestroka = $_POST['dateStroka'];
    $arr = explode("-", $dateStroka);
    $year = $arr[0];
    $month = $arr[1];
    $day = $arr[2] ;
    $timestamp = mktime(0, 0, 0, $month, $day, $year);
    return $timestamp . "<br>";
  }
  echo getDateInFormat($_POST['dateStroka']);

  function getMonth($dateStroka) {
    $datestroka = $_POST['dateStroka'];
    $arr = explode("-", $dateStroka);
    $year = $arr[0];
    $month = $arr[1];
    $day = $arr[2];
    $ourMonth = date('m', mktime(0, 0, 0, $month, $day, $year));
    $arrayMonth = array(1 => 'Январь', 
                    2 => 'Февраль', 
                    3 => 'Март', 
                    4 => 'Апрель', 
                    5 => 'Май', 
                    6 => 'Июнь', 
                    7 => 'Июль', 
                    8 => 'Август', 
                    9 => 'Сентябрь', 
                    10 => 'Октябрь', 
                    11 => 'Ноябрь', 
                    12 => 'Декабрь');

    for ($i = 1; $i <= count($arrayMonth); $i++) {
      if ($ourMonth == $i) {
        return "Вы вввели месяц " . $arrayMonth[$i];
      }
    }
  }
  echo getMonth ($_POST['dateStroka']);
}
?>
<html>
    <head>
        <title> </title>
    </head>
    <body>
    <form method="POST"> 
      Введите дату в формате '2025-12-31': <input type="text" name="dateStroka" size="12" maxlength="10" value="">
      <input type="submit" value="отправить год">
    </form>
    </body>
</html>

 



