# Content

#### 1. Broken Egg problem
You are given 2 eggs and were told that there is a nth floor building, from which you have to find out what is the 
maximum number of floor from which the egg can survive the fall (in minimum number of attempts). Given that it 
both eggs are equally strong in each of the falls.

Write a function which return the minimum number of attempts that are required to find that out

```
<?php
    function brokenEggsForNthFloor(int $numberOfFloors) : int
    {
      //write your code here
    }

    var_dump(brokenEggsForNthFloor(100));
?>

output: 14
```
`HINT : Assume that minimum number of attempts that are required to find out the floor number is X.
Now lets drop the egg from Xth floor. if egg is broken we drop the second egg from 1st floor, then 2nd floor 
and so on. If it doesn't break we drop it from (X + X - 1)th floor and so on.`

[click here to see the solution](https://github.com/avinash403/brainteasers/blob/master/moderate/brokenEgg.php)
