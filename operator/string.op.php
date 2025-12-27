<?php

/*
====================================================
 PHP String Operators 
====================================================

String operators are used to **manipulate and combine strings**.

-----------------------------------
1) Concatenation (.)
-----------------------------------
- Joins many strings together.

Example:
  $str1 = "Hello";
  $str2 = "World";
  $result = $str1 . " " . $str2; // "Hello World"

-----------------------------------
2) Concatenation Assignment (.=)
-----------------------------------
- Appends the right string to the variable.

Example:
  $str = "Hello";
  $str .= " World"; // $str = $str . "world" ---> $str → "Hello World" 

-----------------------------------
Important Notes:
-----------------------------------
- PHP does not have + for strings (use .)
- Concatenation assignment (.=) is useful for building strings incrementally
- Strings can contain variables directly using **double quotes**
  Example:
    $name = "Ali";
    echo "Hello $name"; // "Hello Ali"

====================================================
*/


$name = "Ali";
$greeting = "Hello";

echo "$name $greeting"; 
echo "\n";

echo "{$name} {$greeting}";
echo "\n";

echo $greeting . $name;
echo "\n";


$greeting .= " world";
$greeting .= " from PHP";   

echo "$greeting";
