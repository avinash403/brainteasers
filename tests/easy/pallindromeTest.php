<?php 

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../../easy/pallindrome.php";

class PallindromeTest extends TestCase
{
	public function test_pallindromeWhenInputIsNonPallindrome()
	{
		$isPalindrome = isPalindrome('something');
		$this->assertFalse($isPalindrome);
	}

	public function test_pallindromeWhenInputIsPallindromeWithUppercases()
	{
		$isPalindrome = isPalindrome('Madam');
		$this->assertTrue($isPalindrome);
	}

	public function test_pallindromeWhenInputIsPallindromeWithNoUppercases()
	{
		$isPalindrome = isPalindrome('madam');
		$this->assertTrue($isPalindrome);
	}

}
