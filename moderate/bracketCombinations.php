<?php 

/**
 * Print all possible combination of brackets by a given number.
 * There should be a closing bracket for eahc opening bracket.
 * for eg.
 *
 * for N = 2 
 * (()), ()()
 *
 * for N = 3
 * ((())), (()()), ()()()
 */


###########################################################################################################################
# APPROACH : First and last brackets are fixed as '(' and ')'. Rest all the brackets can be considered as combination of 
# zeroes and ones
###########################################################################################################################
function bracketCombination(int $number) : string
{
	$variableBrackets = 2*($number - 2);

	$bracketsArray = getArrayOfZeroesAndOnes($variableBrackets/2);

	$combinations = [];

	for($i = 0; $i < $variableBrackets; $i++) {
		//find out all the possible combinations of zero and one. Then replace zero with '('
		//and one with ')'.
		// $combination = 
	}
}



function parens( int $left, int $right, string $string, &$all) {

  // if no more brackets can be added then add the final balanced string
  if ($left == 0 && $right == 0) {
    array_push( $all,  $string );
  }
  
  // if we have a left bracket left we add it
  if ($left > 0) {
    parens( $left - 1, $right + 1, $string + "(" , $all);
  }
  
  // if we have a right bracket left we add it
  if ($right > 0) {
    parens( $left, $right - 1, $string + ")" , $all); 
  }
}

$all =[];

parens(0, 5, "", $all);

var_dump($all);

/*
var all = [];


// the parameters parens(x, y, z) specify:
// x: left brackets to start adding
// y: right brackets we can add only after adding a left bracket
// z: the string so far
parens(3, 0, "");
all; 

 */


/**
 * Gets array of zeroes and ones by given number.
 * For eg. if number is 2, there will be 2 zeroes and 2 ones
 * @return  integer $number 	number of 0's/1's required
 */
function getArrayOfZeroesAndOnes(int $number) : array 
{
	$zeroes = array_fill(0, $number, 0);
	$ones = array_fill(0, $number, 1);

	return array_merge($zeroes, $ones);
}

// bracketCombination(2);
