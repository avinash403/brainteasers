<?php 

######################################################################################################
# Write a function that accepts a number as argument as returns back an array with fibonacci sequence 
# corresponding to that number.
# 
# For eg. for number 5 it should return [1, 3, 6, 10, 15] 
######################################################################################################


function fizzbuzz(int $limit) : array
{
	$i = 1;
	$pattern = [];

	while($i <= $limit){
		$yield = '';

		if($i % 3 == 0) { $yield = 'fizz'; }
		if($i % 5 == 0) { $yield .= 'buzz'; }
		if(!$yield) { $yield = $i; }
		
		array_push($pattern, $yield);

		$i++;
	}

	return $pattern;
}