<?php
require_once  '/var/www/html/myproject/webPages/header.php';
// Напишите простой PHP класс, который отображает следующую строку: 'MyClass class has initialized !'
class ClassPhp
{
	public $name = "MyClass class has initialized !";
}
$stroka = new ClassPhp;
echo $stroka->name;
echo "<br>";


class ClassPhp2
{
	public $name2 = "MyClass class has initialized !";
	function getName() {
		return $this->name2;
	} 
}
$stroka2 = new ClassPhp2;
echo $stroka2->getName();
require_once  '/var/www/html/myproject/webPages/footer.php';



	