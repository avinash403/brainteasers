<?php 

###################################################################################################################
# You are given 2 eggs and were told that there is a nth floor building, from which you have to find out what is the 
# maximum number of floor from which the egg can survive the fall (in minimum number of attempts). Given that it 
# both eggs are equally strong in each 
# of the falls.
###################################################################################################################



###################################################################################################################
# APPROACH : Assume that minimum number of attempts that are required to find out the floor number is X.
# Now lets drop the egg from Xth floor. if egg is broken we drop the second egg from 1st floor, then 2nd floor 
# and so on. If it doesn't break we drop it from (X + X - 1)th floor and so on.
#
# Lets say, for 100 number of floors,
# The number of attempts must follow this equation :
# 	X + X -1 + X-2 .... + (X - (X - 1))  >= 100
#
# It can be also written as :
#  	1 + 2 + 3 + ..... X >= 100
#  	X (X+2)/2 >= 100
#  	X*X + X - 200 >= 0; (now do this programatically)
####################################################################################################################

function brokenEggsForNthFloor(int $numberOfFloors) : int
{
	// assuming x is the maximum number of attempts
	// now keep reducing x until 1. So if going the other way, it would look something like
	// 1 + 2 + 3 + .... + x >= 100
	// loop over x(only if we know what x is)
	$sum = 0;

	for($i = 1; $i <= $numberOfFloors; $i++){
		
		$sum += $i;

		if($sum >= $numberOfFloors){
			return $i;
		}
	}
	return 0;
}