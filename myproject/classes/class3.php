<?php
// Напишите PHP класс, который считает факториал числа.
class Factorial
{
		public $n;
		public $factorial;
		
		public function __construct($n = 10)
	    {
	        $this->n = $n;
	    }
	    
		function calculationFactorial($n)
		{
			if ($this->n == 0){
				$this->factorial = 1;
				return $this->factorial;
			}
			else {
			 	$this->factorial = $this->n * ($this->n - 1);
			}
			return $this->factorial;
		}
}
$object = new Factorial;
echo "Факториал = " . $object->calculationFactorial(10);
//echo "Факториал = " . $object->calculationFactorial($object->__construct($n = 10));



