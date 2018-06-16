<?php 

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