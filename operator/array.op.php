<?php 

/*
====================================================
 PHP Array Operators
====================================================

Array operators are used to **perform operations on arrays**.

-----------------------------------
1) Union (+)
-----------------------------------
- Combines two arrays.
- Keys from the left array are preserved.
- If a key exists in both arrays, the left value is used.

Example:
  $a = ["a" => "Apple", "b" => "Banana"];
  $b = ["b" => "Berry", "c" => "Cherry"];
  $result = $a + $b;
  // $result → ["a" => "Apple", "b" => "Banana", "c" => "Cherry"]

-----------------------------------
2) Equality (==)
-----------------------------------
- Returns true if two arrays have **same key/value pairs**, regardless of order.

Example:
  ["a" => 1, "b" => 2] == ["b" => 2, "a" => 1]; // true

-----------------------------------
3) Identity (===)
-----------------------------------
- Returns true if two arrays have **same key/value pairs in the same order and same types**.

Example:
  ["a" => 1, "b" => 2] === ["b" => 2, "a" => 1]; // false

-----------------------------------
4) Inequality (!= or <>)
-----------------------------------
- Returns true if arrays are not equal.

Example:
  ["a" => 1] != ["a" => 2]; // true

-----------------------------------
5) Non-identity (!==)
-----------------------------------
- Returns true if arrays are not identical.

Example:
  ["a" => 1] !== ["a" => 1, "b" => 2]; // true

-----------------------------------
Important Notes:
-----------------------------------
- Array union (+) only preserves keys from the left array.
- Equality (==) ignores order; identity (===) respects order and type.
- Useful for comparing and merging arrays.

====================================================
*/


$num1 = [ 1 => "one", 2 => "two", 3 => "three" ];
$num2 = [ 3 => "THREE", 4 => "four", 5 => "five" ];


$num3 = $num1 + $num2;
print_r( $num3 );
echo "\n";


$num4 = [  2 => "two", 1 => "one",3 => "three" ];
echo $num1 == $num4; // Outputs: 1 (true)
echo "\n";


$num5 = [  2 => "two", 1 => "one", 3 => "threee" ];
echo $num1 != $num5; // Outputs: 1 (true)
echo "\n";

$num6 = [  2 => "two", 1 => "one", 3 => "three" ];
echo $num1 === $num6; // Outputs: 0 (false) same key, same value , same type but different order
echo "\n";


$num7 = [ 1 => "one",  2 => "two", 3 => 3 ];
echo $num1 === $num7; // Outputs: 0 (false) same key, same value , same order but different type
echo "\n";


$num8 = [ 1 => "one",  2 => "two", 3 => "three" ];
echo $num1 === $num8; // Outputs: 1 (true) same key, same value , same order and same type
echo "\n";

$num9 = [ 1 => "one",  2 => "two", 3 => "three" ];
echo $num1 !== $num8; // Outputs: 0 (false) same key, same value , same order and same type
echo "\n";

