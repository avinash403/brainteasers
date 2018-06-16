<?php 

######################################################################################################
# Write a function that returns an array of numbers from 1 to 20 and for multiples of '3' return "fizz" 
# instead of the number and for the multiples of '5' return "buzz". For multiple of both return "fizzbuzz"
######################################################################################################

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