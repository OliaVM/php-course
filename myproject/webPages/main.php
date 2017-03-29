<h1>Answer</h1>
<?php if ($array_menu[$i]['url'] == $_GET['url'])  { //url($_SERVER['PHP_SELF'])) { 
	
  
	require '$array_menu[$i]['url']'; 
}
?>