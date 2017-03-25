<!--Сделайте поле ввода, в которое пользователь вводит год (4 цифры), 
а скрипт определяет високосный ли год.
-->
<html>
    <head>
        <title> </title>
    </head>
    <body>

<?php
if (isset($_GET['year'])) {
  function getLeap($year) { 
    $year = $_GET['year'];
    $leap = date('L', mktime(0, 0, 0, 1, 1, $year)); 
    if ($leap ==1) {
      return  "год високосный";
    }
    else {
      return  "год не високосный";
    }
  }
  echo '<h1><b>' . getLeap($_GET['year']) . '</b></h1>';
}
?>
    <!-- Или <form method="GET"> -->
    <form action ="<?php $_SERVER['PHP_SELF']; ?>"> 
      <input type="text" name="year" size="6" maxlength="4" value="">
      <input type="submit" value="отправить год">
    </form>
    </body>
</html>
 

