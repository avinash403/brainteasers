<?php 

function fibonacci($number)
{
	if(!is_int($number) || $number < 1){
		return [];
	}

	$fibonacci = [];
	
	//loop over the number, add numbers
	for($i = 1; $i <= $number; $i++){
		
		$fibonacciSum = $i * ($i + 1) / 2;

		array_push($fibonacci, $fibonacciSum);
	}	

	return $fibonacci;
}

var_dump(fibonacci(5));