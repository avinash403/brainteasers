<?php 

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../../moderate/brokenEgg.php";

class BrokenEggTest extends TestCase
{
	public function test_brokenEggWhenFloorNumberIsZero()
	{
		$numberOfAttempts = brokenEggsForNthFloor(0);
		$this->assertEquals(0, $numberOfAttempts);
	}

	public function test_brokenEggWhenFloorNumberIsOne()
	{
		$numberOfAttempts = brokenEggsForNthFloor(1);
		$this->assertEquals(1, $numberOfAttempts);
	}

	public function test_brokenEggWhenFloorNumberIsHundred()
	{
		$numberOfAttempts = brokenEggsForNthFloor(100);
		$this->assertEquals(14, $numberOfAttempts);
	}

	public function test_brokenEggWhenFloorNumberIsTwoHundred()
	{
		$numberOfAttempts = brokenEggsForNthFloor(200);
		$this->assertEquals(20, $numberOfAttempts);
	}
}
