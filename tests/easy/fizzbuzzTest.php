<?php 

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../../easy/fizzbuzz.php";

class FizzBuzzTest extends TestCase
{
	public function test_fizzbuzzWhenInputIsZero()
	{
		$fbArray = fizzbuzz(0);
		$this->assertEquals([], $fbArray);
	}

	public function test_fizzbuzzWhenInputIsFive()
	{
		$fbArray = fizzbuzz(5);
		$this->assertEquals([1, 2, 'fizz', 4, 'buzz'], $fbArray);
	}

	public function test_fizzbuzzWhenInputIsTen()
	{
		$fbArray = fizzbuzz(10);
		$this->assertEquals([1,2,"fizz",4,"buzz","fizz",7,8,"fizz","buzz"], $fbArray);
	}

	public function test_fizzbuzzWhenInputIsFifteen()
	{
		$fbArray = fizzbuzz(15);
		$this->assertEquals([1,2,"fizz",4,"buzz","fizz",7,8,"fizz","buzz",11,"fizz",13,14,"fizzbuzz"], $fbArray);
	}
}
