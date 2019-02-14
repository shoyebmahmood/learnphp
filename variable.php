<?php
//Variable 
//single quote means string and without quote means number;
//variable must be alfaneumeric, and start must be alphabet.
/*
first $word means age; then php convert age to variable $age which is 16.
*/
$age = 16;
$word = 'age';
echo $$word;
echo PHP_EOL;
//in single quote if we place string variable; php does not recognize it as a variable;
//. or concatation and good practice is to keep variable is curley braces
$name = "Bangladesh";
$question = "How are you?";
echo "hello {$name}, {$question} and my age is {$age}  ";
echo PHP_EOL;
/*
Constant 
*/
define('PI',3.14);
echo constant("PI");
echo "\n";
echo PI;