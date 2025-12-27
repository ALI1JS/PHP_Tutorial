<?php 
/*
====================================================
 PHP Logical Operators
====================================================

Logical operators are used to combine **boolean expressions**
and return **true or false**.

-----------------------------------
1) AND (and / &&)
-----------------------------------
- Returns true if **both conditions** are true.

Example:
  $a = true;
  $b = false;
  $a && $b; // false
  $a and $b; // false (lower precedence than &&)

-----------------------------------
2) OR (or / ||)
-----------------------------------
- Returns true if **at least one condition** is true.

Example:
  $a = true;
  $b = false;
  $a || $b; // true
  $a or $b; // true (lower precedence than ||)

-----------------------------------
3) XOR
-----------------------------------
- Returns true if **exactly one condition** is true (exclusive or).

Example:
  $a = true;
  $b = false;
  $a xor $b; // true
  $a xor true; // false (both true → false)

-----------------------------------
4) NOT (!)
-----------------------------------
- Returns true if the condition is false; negates the boolean value.

Example:
  $a = true;
  !$a; // false

-----------------------------------
Important Notes:
-----------------------------------
- `&&` and `||` have **higher precedence** than `and` and `or`.
- Use parentheses `()` to avoid ambiguity in complex expressions.
- Logical operators are mostly used in **if statements, loops, and conditions**.

====================================================
*/

$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;

echo $num1 > $num2 && $num3 < $num4; // false
echo "\n";


echo $num1 < $num2 and $num3 < $num4; // true
echo "\n";


echo $num1 > $num2 || $num3 < $num4; // true
echo "\n";


echo $num1 < $num2 or $num3 < $num4; // true
echo "\n";


echo $num1 < $num2 xor $num3 < $num4;  // false
echo "\n";


echo $num1 > $num2 xor $num3 < $num4;  // true
echo "\n";






