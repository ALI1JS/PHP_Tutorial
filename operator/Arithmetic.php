<?php
/*
====================================================
 PHP Arithmetic Operators 
====================================================

Arithmetic operators are used to perform
mathematical operations on numeric values.

-----------------------------------
1) Addition (+)
-----------------------------------
- Adds two values together.

Example:
  $a = 5;
  $b = 3;
  $result = $a + $b; // 8

-----------------------------------
2) Subtraction (-)
-----------------------------------
- Subtracts the right value from the left value.

Example:
  $a = 10;
  $b = 4;
  $result = $a - $b; // 6

-----------------------------------
3) Multiplication (*)
-----------------------------------
- Multiplies two values.

Example:
  $a = 6;
  $b = 2;
  $result = $a * $b; // 12

-----------------------------------
4) Division (/)
-----------------------------------
- Divides the left value by the right value.

Example:
  $a = 10;
  $b = 2;
  $result = $a / $b; // 5

Note:
- Division by zero causes an error.

-----------------------------------
5) Modulus (%)
-----------------------------------
- Returns the remainder of division.

Example:
  $a = 10;
  $b = 3;
  $result = $a % $b; // 1

-----------------------------------
6) Exponentiation (**)
-----------------------------------
- Raises left value to the power of right value.

Example:
  $a = 2;
  $b = 3;
  $result = $a ** $b; // 8

-----------------------------------
7) Identity (+)
-----------------------------------
- Returns the value as is.
- Rarely used, mostly for clarity.

Example:
  $a = 5;
  $result = +$a; // 5

-----------------------------------
8) Negation (-)
-----------------------------------
- Converts value to its negative form.

Example:
  $a = 5;
  $result = -$a; // -5

-----------------------------------
Important Notes:
-----------------------------------
- Operators follow precedence rules.
- Use parentheses () to control order.
- Works with integers and floats.

====================================================
*/

echo 10 + 5; // Addition
echo "\n";

echo 10 - 5; // Subtraction
echo "\n";

echo 10 * 5; // Multiplication
echo "\n";

echo 10 / 5; // Division      
echo "\n";

echo 11 % 5; // Modulus ==> 1
echo "\n";

echo +"100"; // Identity
echo "\n";

echo +"-100"; // Identity
echo "\n";

echo -"100"; // Negation
echo "\n";
