<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../../easy/fileOwners.php";

class FileOwnersTest extends TestCase
{
	public function test_fileOwnersWhenInputIsEmptyArray()
	{
		$fileownersArray = groupByOwners([]);
		$this->assertEquals([], $fileownersArray);
	}

	public function test_fileOwnersWhenInputHasUniqueOwners()
	{
		$fileownersArray = groupByOwners(
			['file1.txt'=>'person one', 'file2.txt'=>'person two', 'file3.txt'=>'person three']
		);

		$this->assertEquals(
			['person one'=>['file1.txt'], 'person two'=>['file2.txt'], 'person three'=>['file3.txt']]
			, $fileownersArray
		);	
	}
	
	public function test_fileOwnersWhenInputHasNonUniqueOwners()
	{
		$fileownersArray = groupByOwners(
			['file1.txt'=>'person one', 'file2.txt'=>'person one', 'file3.txt'=>'person one']
		);

		$this->assertEquals(['person one'=>['file1.txt', 'file2.txt','file3.txt']], $fileownersArray);	
	}
}
