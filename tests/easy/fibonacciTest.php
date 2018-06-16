<?php 

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../../easy/fibonacci.php";

class FibonacciTest extends TestCase
{
	public function test_fibonacciWhenInputIsZero()
	{
		$fbArray = fibonacci(0);
		$this->assertEquals([], $fbArray);
	}


	public function test_fibonacciWhenInputIsFive()
	{
		$fbArray = fibonacci(5);
		$this->assertEquals([1, 3, 6, 10, 15], $fbArray);
	}

	public function test_fibonacciWhenInputIsTen()
	{
		$fbArray = fibonacci(10);
		$this->assertEquals([1, 3, 6, 10, 15, 21, 28, 36, 45, 55], $fbArray);
	}
}
