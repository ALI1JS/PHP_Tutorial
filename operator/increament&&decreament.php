<?php 
/*
====================================================
 PHP Increment and Decrement Operators
====================================================

Increment and Decrement operators are used to
**increase or decrease the value of a variable **.

-----------------------------------
1) Increment (++)
-----------------------------------
- Adds 1 to the variable.

Example:
  $a = 5;
  $a++;    // $a = 6 (Post-increment)
  ++$a;    // $a = 7 (Pre-increment)

-----------------------------------
2) Decrement (--)
-----------------------------------
- Subtracts 1 from the variable.

Example:
  $a = 5;
  $a--;    // $a = 4 (Post-decrement)
  --$a;    // $a = 3 (Pre-decrement)

-----------------------------------
3) Pre-Increment / Pre-Decrement
-----------------------------------
- **Pre-Increment (++$var)**: Increases value first, then returns it.
- **Pre-Decrement (--$var)**: Decreases value first, then returns it.

Example:
  $a = 5;
  echo ++$a; // Outputs 6
  echo --$a; // Outputs 5

-----------------------------------
4) Post-Increment / Post-Decrement
-----------------------------------
- **Post-Increment ($var++)**: Returns current value first, then increases it.
- **Post-Decrement ($var--)**: Returns current value first, then decreases it.

Example:
  $a = 5;
  echo $a++; // Outputs 5, $a becomes 6
  echo $a--; // Outputs 6, $a becomes 5

-----------------------------------
Important Notes:
-----------------------------------
- Pre operators: value is updated **before** use.
- Post operators: value is updated **after** use.
- Useful in loops, counters, and mathematical calculations.

====================================================
*/

// Post Increament
$num = 10;
echo $num++;  // 10
echo "\n";
echo $num;  // 11
echo "\n";


// Pre Increament
$num = 10;
echo ++$num;  // 11
echo "\n";
echo $num; // 11
echo "\n";


// Post Decreament
$num = 10;
echo $num--;  // 10
echo "\n";
echo $num;  // 9
echo "\n";


// Pre Decreament
$num = 10;
echo --$num;  // 9
echo "\n";
echo $num;  // 9
echo "\n";




