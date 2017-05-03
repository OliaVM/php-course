<?php
require_once  '/var/www/html/myproject/webPages/header.php';
// Напишите простой PHP класс, который отображает приветственное сообщение: 
//"Hello All, I am Scott", где Scott - значение аргумента метода внутри класса.
class Message
{
	public $text = "Hello All, I am ";
	public $name = "Scott";
		
	function getName() {
		echo $this->text . $this->name;
	}
}
$object = new Message;
$object->getName();
require_once  '/var/www/html/myproject/webPages/footer.php';


	