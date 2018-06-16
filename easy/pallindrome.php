<?php 


######################################################################################################
# A palindrome is a word that reads the same backward or forward.
#
# Write a function that checks if a given word is a palindrome. Character case should be ignored.
#
# For example, isPalindrome("Deleveled") should return true as character case should be ignored, 
# resulting in "deleveled", which is a palindrome since it reads the same backward and forward.
# 
######################################################################################################


function isPalindrome(string $string) : bool {
	//convert string to small case first
	$sanitizedString = strtolower($string);
	//reverse it
	$sanitizedStringReverse = strrev($sanitizedString);
	
	if($sanitizedString == $sanitizedStringReverse){
		return true;
	}

	return false;
}