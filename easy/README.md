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

#### 3. Pallindrome

A palindrome is a word that reads the same backward or forward.

Write a function that checks if a given word is a palindrome. Character case should be ignored.

For example, isPalindrome("Deleveled") should return true as character case should be ignored, resulting in "deleveled", which is a palindrome since it reads the same backward and forward.

```
<?php
    function isPalindrome(string $string) : string
    {
      //write your code here
    }

    var_dump(isPalindrome('Deleveled'));
?>

output: true
```
[click here to see the solution](https://github.com/avinash403/brainteasers/blob/master/easy/pallindrome.php)

#### 4. File Owners (array maipulation)
Implement a groupByOwners function that:
Accepts an associative array containing the file owner name for each file name.
Returns an associative array containing an array of file names for each owner name, in any order.

For example, for associative array ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"] 
the groupByOwners function should return ["Randy" => ["Input.txt", "Output.txt"], "Stan" => ["Code.py"]].

```
<?php
    function groupByOwners(string $string) : string
    {
      //write your code here
    }

    var_dump(groupByOwners([["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"]]));
?>

output: ["Randy" => ["Input.txt", "Output.txt"], "Stan" => ["Code.py"]]
```
[click here to see the solution](https://github.com/avinash403/brainteasers/blob/master/easy/fileOwners.php)

