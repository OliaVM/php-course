
<html>
    <head>
        <title> </title>
    </head>
    <body>
    <?php
    function getLeap($year){ 
      $leap = date('L', mktime(0, 0, 0, 1, 1, $year)); 
      if ($leap ==1) {
        return  "год високосный";
      }
      else {
        return  "год не високосный";
      }
    }
    echo getLeap($_POST['$year']);
    ?>
    </body>
</html>


