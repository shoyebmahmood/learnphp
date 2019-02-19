<?php
$n = 12;
if ($n % 2 == 0) {
    echo "{$n} is an even number";
} else {
    echo "{$n} is an odd number";
}
/*
logical operators
==
>
<
>=
<=
!=
 */
echo PHP_EOL;
$salam = 100;
$tutul = 400;
if ($salam == $tutul) {
    echo "salam and tutul have same amount of money";
} elseif ($salam > $tutul) {
    echo "salam has more money than tutul";
} elseif ($salam < $tutul) {
    echo "salam have less money than tutul";
}
//in if else logic if first condition becomes true then other condition's do not run.
echo PHP_EOL;
$age = 14;
if ($age >= 13 && $age <= 19) {
    echo "This person is a teenager!";
} else {
    echo "This person is not a teenager!";
}
echo PHP_EOL;

//you cannot assign variable in static data;you only assign data in variable
//so in == operator we must keep static data in left side
//if we just keep = it will show parse error and we can find the problem.
$food = "orange";
if ("Tuna" == $food || "salmon" == $food) {
    echo "It has vitamin D";
} elseif ("apple" == $food) {
    echo "Apple does not contain vitamin D";

} else {
    echo "We do not know whether {$food} contains vitamin D";
}
echo PHP_EOL;
//Ternary operator
$number = 12;
if (12 == $number) {
    echo "Twelve";
} elseif (10 == $number) {
    echo "Ten";
} else {
    echo "Other number!";
}
echo "\n";
//we can do this in using ternary operator
$numberInWord = (12 == $number) ? "Twelve" : "A number";
echo $numberInWord;