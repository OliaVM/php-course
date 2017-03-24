<?php
//Напишите PHP класс калькулятор,который принимает два значения как аргументы 
//и умеет складывать, вычитать, умножать и делить эти значения при вызове соответствующих методов.

class MyCalculator 
{
	public $a;
	public $b;
	function add() {
		$sum = $this->a + $this->b;
		return $sum;
	} 
	function multiply() {
		return $this->a * $this->b; 
	} 
	function deduction() {
		return $this->a - $this->b; 
	}
	function div() {
		return $this->a / $this->b; 
	}
}
$mycalc = new MyCalculator; 
$mycalc->a = 12;
$mycalc->b = 6;
echo "12 + 6 = " . $mycalc->add() . "<br>"; // Сложение
echo "12 * 6 = " . $mycalc->multiply() . "<br>"; // Умножение
echo "12 - 6 = " . $mycalc->deduction() . "<br>"; // Вычитание
echo "12:6 = " . $mycalc->div(). "<br>"; // Деление
echo "<br>";
//Способ2
class MyCalculator2 
{
	function add2($a2, $b2) {
		return $a2 + $b2;
	} 
	function multiply2($a2, $b2) {
		return $a2 * $b2; 
	} 
	function deduction2($a2, $b2) {
		return $a2 - $b2; 
	}
	function div2($a2, $b2) {
		return $a2 / $b2; 
	}
}
$mycalc2 = new MyCalculator2; 
echo "12 + 6 = " . $mycalc2->add2(12, 6). "<br>"; // Сложение. Displays 18 
echo "12 * 6 = " . $mycalc2->multiply2(12, 6). "<br>"; // Умножение. Displays 72 
echo "12 - 6 = " . $mycalc2->deduction2(12, 6). "<br>"; // Вычитание
echo "12 : 6 = " . $mycalc2->div2(12, 6); // Деление