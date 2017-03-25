<!--. Сделайте форму, которая спрашивает дату в формате '31.12.2025'. 
С помощью функций mktime и explode переведите эту дату в формат timestamp. 
Узнайте день недели (словом) за введенную дату.-->
<html>
    <head>
        <title> </title>
    </head>
    <body>

<?php
if (isset($_POST['dateStroka'])) {
  function getDateInFormat($dateStroka) {
    $dateStroka = $_POST['dateStroka'];
    $arr = explode(".", $dateStroka);
    $day = $arr[0];
    $month = $arr[1];
    $year = $arr[2];
    $timestamp = mktime(0, 0, 0, $month, $day, $year);
    return  $timestamp . " секунд прошло с 1-го января 1970 года" . "<br>";
  }
  echo getDateInFormat($_POST['dateStroka']);

  function getDayOfWeek($dateStroka) {
    $dateStroka = $_POST['dateStroka'];
    $arr = explode(".", $dateStroka);
    $day = $arr[0];
    $month = $arr[1];
    $year = $arr[2];
    $date = date('w', mktime(0, 0, 0, $month, $day, $year)) . "<br>"; 
    $week = array(1, 2, 3, 4, 5, 6, 0);
    for ($i = 0; $i < 7; $i++) {
      if ($week[$i] == $date) {
        switch ($i) {
          case 0:
          $dayOfWeek = "понедельник";
          break;
          case 1:
          $dayOfWeek = "вторник";
          break;
          case 2:
          $dayOfWeek = "среда";
          break;
          case 3:
          $dayOfWeek = "четверг";
          break;
          case 4:
          $dayOfWeek = "пятница";
          break;
          case 5:
          $dayOfWeek = "суббота";
          break;
          case 6:
          $dayOfWeek = "воскресенье";
          break;
        }
      }
    }
  return $dayOfWeek;
  }
  echo getDayOfWeek($_POST['dateStroka']);
}
?>
    <form method="POST"> 
      Введите дату в формате '31.12.2025': <input type="text" name="dateStroka" size="12" maxlength="10" value="">
      <input type="submit" value="отправить год">
    </form>
    </body>
</html>

 



