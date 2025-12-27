<?php
// Replace ? With Arithmetic Operators
echo (10 + 20) * (15 / 3) - 190 + 400 / 10; // 0
echo"\n";

// Task 2: 

$a = "10";

echo (int)$a . "\n";
echo getType((int)$a) . "\n";

echo +$a . "\n";
echo getType(+$a) . "\n";


echo $a + $a -$a . "\n";
echo getType($a + $a -$a) . "\n";

// Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"


// Task 3: 
$a = 10;
$b = 20;

echo $a <=> $b . "\n";

// Needed Output
// -1


// Task 4: 

$a = 10;
$b = 20;
$c = 15;

echo"\n";
var_dump($a != $b); // True
var_dump($c > $a); // True
var_dump($a < $b); // True
var_dump($a !== $b); // True
var_dump($a < $c); // True
var_dump($a <> $c); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True



// Task 5: 
$points = 10;

// Write Your Code Here

$points += 3;

echo $points . "\n"; // 13

// Write Your Code Here
$points -= 5;

echo $points . "\n"; // 8;


// Task 6: 
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d =  "$a $b $c";
echo $d . "\n"; // Elzero Web School

// Method Two
$d = "{$a} {$b} {$c}";
echo $d . "\n"; // Elzero Web School

// Method Three
$d = $a . " " .$b . " " . $c;
echo $d . "\n"; // Elzero Web School

// Method Four
$d .= $a;
$d .= " ";
$d .= $b;
$d .= " ";
$d .= $c;

echo $d; // Elzero Web School



// Task 7: correct the errors and custom the error message
// Code 1
$a = @$bb or die("Variable  Undefined");

// Code 2
$f = @file("Not_A_File") or die("File Not Found");

// Code 3
@(include("Not_A_File")) or die("File Not Found");