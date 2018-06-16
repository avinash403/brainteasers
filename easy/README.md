# Content

#### 1. Fibbonacci Sequence
Write a function that accepts a number as argument as returns back an array with fibonacci sequence corresponding to that number.<br/>
For eg. for number 5 it should return [1, 3, 6, 10, 15] ([Read more about fibbonacci sequence](https://www.livescience.com/37470-fibonacci-sequence.html))<br/>

```
<?php
    function fibonacci(int $number) : array
    {
      //write your code here
    }

    var_dump(fibonacci(5));
?>

output: [1, 3, 6, 10, 15]
```
[click here to see the solution](https://github.com/avinash403/brainteasers/blob/master/easy/fibonacci.php)

#### 2. Fizz Buzz
Write a function that returns an array of numbers from 1 to 20 and for multiples of '3' return "fizz" instead of the number 
and for the multiples of '5' return "buzz". For multiple of both return "fizzbuzz"<br/>

```
<?php
    function fizzbuzz(int $number) : array
    {
      //write your code here
    }

    var_dump(fizzbuzz(10));
?>

output: [1,2,"fizz",4,"buzz","fizz",7,8,"fizz","buzz",11,"fizz",13,14,"fizzbuzz",16,17,"fizz",19,"buzz"]
```
[click here to see the solution](https://github.com/avinash403/brainteasers/blob/master/easy/fizzbuzz.php)
