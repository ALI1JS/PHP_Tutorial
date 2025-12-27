<?php

/*
====================================================
 PHP Assignment Operators
====================================================

Assignment operators are used to **assign values** 
to variables, sometimes with an operation.

-----------------------------------
1) Simple Assignment (=)
-----------------------------------
- Assigns the value on the right to the variable on the left.

Example:
  $a = 10; // $a is now 10

-----------------------------------
2) Addition Assignment (+=)
-----------------------------------
- Adds the right value to the variable and assigns the result.

Example:
  $a = 5;
  $a += 3; // $a = $a + 3 → 8

-----------------------------------
3) Subtraction Assignment (-=)
-----------------------------------
- Subtracts the right value from the variable and assigns the result.

Example:
  $a = 10;
  $a -= 4; // $a = $a - 4 → 6

-----------------------------------
4) Multiplication Assignment (*=)
-----------------------------------
- Multiplies the variable by the right value and assigns the result.

Example:
  $a = 6;
  $a *= 2; // $a = $a * 2 → 12

-----------------------------------
5) Division Assignment (/=)
-----------------------------------
- Divides the variable by the right value and assigns the result.

Example:
  $a = 10;
  $a /= 2; // $a = $a / 2 → 5

-----------------------------------
6) Modulus Assignment (%=)
-----------------------------------
- Applies modulus with right value and assigns the remainder.

Example:
  $a = 10;
  $a %= 3; // $a = $a % 3 → 1

-----------------------------------
7) Exponentiation Assignment (**=)
-----------------------------------
- Raises the variable to the power of the right value and assigns it.

Example:
  $a = 2;
  $a **= 3; // $a = $a ** 3 → 8

-----------------------------------
8) Concatenation Assignment (.=)
-----------------------------------
- Appends a string to the variable.

Example:
  $str = "Hello ";
  $str .= "World"; // $str → "Hello World"

-----------------------------------
Important Notes:
-----------------------------------
- Assignment operators combine **operation + assignment**.
- Useful for concise code and updates.
- Works with numbers and strings (for .=).

====================================================
*/



$num = 10;
echo $num;  // 10
echo "\n";

$num += 10;
echo $num;  // 20
echo "\n";

$num -= 5;
echo $num; // 15
echo "\n";

$num *= 2;
echo $num;  // 30
echo "\n";

$num /= 5;
echo $num; // 6
echo "\n";

$num %= 4;
echo $num; // 2
echo "\n";

$num **= 2;  // 4
echo $num;
echo "\n";