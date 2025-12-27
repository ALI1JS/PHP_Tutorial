<?php 

/*
====================================================
 PHP Comparison Operators
====================================================

Comparison operators are used to **compare values**
and return a boolean result (true or false).

-----------------------------------
Part 1: Equality and Inequality
-----------------------------------

1) Equal (==)
- Returns true if values are equal.

Example:
  5 == "5"; // true

2) Not Equal (!= or <>)
- Returns true if values are not equal.

Example:
  5 != 10;  // true
  5 <> 5;   // false

-----------------------------------
Part 2: Identity and Non-Identity
-----------------------------------

3) Identical (===)
- Returns true if values are equal **and** type is the same.

Example:
  5 === "5"; // false
  5 === 5;   // true

4) Not Identical (!==)
- Returns true if values are not equal or not of the same type.

Example:
  5 !== "5"; // true
  5 !== 5;   // false

-----------------------------------
Part 3: Comparison Operators
-----------------------------------

5) Greater Than (>)
- Returns true if left value is greater than right value.

Example:
  10 > 5; // true

6) Less Than (<)
- Returns true if left value is less than right value.

Example:
  3 < 7; // true

7) Greater Than or Equal (>=)
- Returns true if left value is greater than or equal to right value.

Example:
  10 >= 10; // true

8) Less Than or Equal (<=)
- Returns true if left value is less than or equal to right value.

Example:
  5 <= 7; // true

9) Spaceship (<=>)
- Returns:
  -1 if left < right
   0 if left == right
   1 if left > right

Example:
  5 <=> 10; // -1
  10 <=> 10; // 0
  15 <=> 10; // 1

-----------------------------------
Important Notes:
-----------------------------------
- Use `===` for strict comparison to avoid type coercion.
- `<=>` is useful for sorting and combined comparisons.
- Equality operators (`==`, `!=`) may convert types automatically.
- Identity operators (`===`, `!==`) are stricter and safer.

====================================================
*/


echo 5 == 5; // true
echo "\n";

echo 5 == "5"; // true as the value is equal on the two side
echo "\n";

echo 5 == -5; //false
echo "\n";


echo 5 != 5; // false
echo "\n";

echo 5 <> "5"; // false
echo "\n";

echo 5 != -5; // true 
echo "\n";


echo 5 === 5; // true value and the type are same
echo "\n";

echo 5 === "5"; // false as the type is not same but the value is equal
echo "\n";


echo 5 !== -5; // true as the type is same but the type not same
echo "\n";


echo 5 > 5; // false
echo "\n";

echo 5 < "6"; // true 
echo "\n";

echo 5 >= 5; // true
echo "\n";

