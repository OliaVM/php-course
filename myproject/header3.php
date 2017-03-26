<html>
	<head>
	<link rel="stylesheet" type="text/css" href="index2.0.css">
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div id="logoleft">
				</div>	
				<div id="logoright"><h1>PHP course</h1>
				</div>	
			</div>
			<div id="main">
				<div id="menu">
				<P><h1>PHP tasks</h1></P>
				
<?php
$i = 0;
$array_menu = array();

$array_menu[$i]['url']='/index2.php';
$array_menu[$i++]['name']='Главная';

$array_menu[$i]['url']='loops/loop1.php';
$array_menu[$i++]['name']='Loop 1';
$array_menu[$i]['url']='/loops/loop2.php';
$array_menu[$i++]['name']='Loop 2';
$array_menu[$i]['url']='/loops/loop3.php';
$array_menu[$i++]['name']='Loop 3';
$array_menu[$i]['url']='/loops/loop4.php';
$array_menu[$i++]['name']='Loop 4';
$array_menu[$i]['url']='/loops/loop5.php';
$array_menu[$i++]['name']='Loop 5';
$array_menu[$i]['url']='/loops/loop6.php';
$array_menu[$i++]['name']='Loop 6';

$array_menu[$i]['url']='/arrays/arr1.2.php';
$array_menu[$i++]['name']='Array 1';
$array_menu[$i]['url']='/arrays/arr2.php';
$array_menu[$i++]['name']='Array 2';
$array_menu[$i]['url']='/arrays/arr3.php';
$array_menu[$i++]['name']='Array 3';
$array_menu[$i]['url']='/arrays/arr4.php';
$array_menu[$i++]['name']='Array 4';
$array_menu[$i]['url']='/arrays/arr5.php';
$array_menu[$i++]['name']='Array 5';
$array_menu[$i]['url']='/arrays/arr6.php';
$array_menu[$i++]['name']='Array 6';
$array_menu[$i]['url']='/arrays/arr7.php';
$array_menu[$i++]['name']='Array 7';
$array_menu[$i]['url']='/arrays/arr8.php';
$array_menu[$i++]['name']='Array 8';
$array_menu[$i]['url']='/arrays/arr9.php';
$array_menu[$i++]['name']='Array 9';
$array_menu[$i]['url']='/arrays/arr10.php';
$array_menu[$i++]['name']='Array 10';
$array_menu[$i]['url']='/arrays/arr11.php';
$array_menu[$i++]['name']='Array 11';
$array_menu[$i]['url']='/arrays/arr12.php';
$array_menu[$i++]['name']='Array 12';


$array_menu[$i]['url']='/dates/date1.php';
$array_menu[$i++]['name']='Date 1';
$array_menu[$i]['url']='/dates/date2.php';
$array_menu[$i++]['name']='Date 2';
$array_menu[$i]['url']='/dates/date3.php';
$array_menu[$i++]['name']='Date 3';
$array_menu[$i]['url']='/dates/date4.php';
$array_menu[$i++]['name']='Date 4';
$array_menu[$i]['url']='/dates/date5.php';
$array_menu[$i++]['name']='Date 5';
$array_menu[$i]['url']='/dates/date6.php';
$array_menu[$i++]['name']='Date 6';
$array_menu[$i]['url']='/dates/date7.php';
$array_menu[$i++]['name']='Date 7';
$array_menu[$i]['url']='/dates/date8.php';
$array_menu[$i++]['name']='Date 8';


$array_menu[$i]['url']='/dates/date9.php';
$array_menu[$i++]['name']='Date 9';
$array_menu[$i]['url']='/dates/date10.php';
$array_menu[$i++]['name']='Date 10';
$array_menu[$i]['url']='/dates/date11.php';
$array_menu[$i++]['name']='Date 11';
$array_menu[$i]['url']='/dates/date12.php';
$array_menu[$i++]['name']='Date 12';
$array_menu[$i]['url']='/dates/date13.php';
$array_menu[$i++]['name']='Date 13';
$array_menu[$i]['url']='/dates/date14.php';
$array_menu[$i++]['name']='Date 14';
$array_menu[$i]['url']='/dates/date15.php';
$array_menu[$i++]['name']='Date 15';
$array_menu[$i]['url']='/dates/date16.php';
$array_menu[$i++]['name']='Date 16';

$array_menu[$i]['url']='/classes/class1.php';
$array_menu[$i++]['name']='Class 1';
$array_menu[$i]['url']='/classes/class2.php';
$array_menu[$i++]['name']='Class 2';
$array_menu[$i]['url']='/classes/class3.php';
$array_menu[$i++]['name']='Class 3';
$array_menu[$i]['url']='/classes/class4.php';
$array_menu[$i++]['name']='Class 4';
$array_menu[$i]['url']='/classes/class5.php';
$array_menu[$i++]['name']='Class 5';
$array_menu[$i]['url']='/classes/class6.php';
$array_menu[$i++]['name']='Class 6';

echo "<ul>\n";
for ($i=0;$i<count($array_menu);$i++)
{
       echo ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ? '<li class="active">': '<li>';
       echo "<a href=\"".$array_menu[$i]['url']."\">".$array_menu[$i]['name']."</a></li>\n";
}
echo "</ul>";
?>
				</div> 
				<div id="content">
