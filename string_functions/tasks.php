<?php

echo "Task 1: \n";

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str[(int) $num_two] = $let_two;
$str[-1] = $let_one;

echo $str . "\n"; // Elzero

echo "Task 2: \n";


$str = "Orezle";
echo ucfirst(strtolower(strrev($str)))."\n";
// Elzero

echo "Task 3: \n";

$str = 'aAa';
$num = 3;
$char = "_";

$correct_str = str_replace("A", "a", $str);
$replaced = substr_replace($correct_str, $char, offset: 3);
echo str_repeat($replaced, 3) . "\n";
// aaa_aaa_aaa_



echo "Task 4: \n";

$str = "<div><b>Elzero</b></div>";

echo substr($str, 5, 13) . "\n";
// <b>Elzero</b>

echo "Task 5: \n";

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str, $e, $four) . "\n";
echo substr_count($str, strtolower($o), $four, 11) . "\n";

// 1
// 2


echo "Task 6: \n";

$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars) . "\n";
// Output
// "Elzero"

echo "Task 7: \n";
$chars2 = ["E", 1, 2, "l", "z", "E", "R", "o"];
$converted_str = implode($chars2);
$str_without_numbers = substr_replace($converted_str, "", 1, 2);
echo ucfirst(strtolower($str_without_numbers));
// Output
// "Elzero"

