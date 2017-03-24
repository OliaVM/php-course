<?php
// Напишите PHP класс, который считает факториал числа.
class Factorial
{
		public $n = 10;
		function calculationFactorial()
		{
			if ($this->n == 0){
				$factorial = 1;
				return $factorial;
			}
			else {
			 	$factorial = $this->n * ($this->n - 1);
			}
			return $factorial;
		}
}
$object = new Factorial;
echo "Факториал числа 10 = " . $object->calculationFactorial();


