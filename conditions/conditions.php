<?php
/*
====================================================
 PHP Conditions & Switch — Summary
====================================================

Conditional statements allow the program to
execute code based on certain conditions.

-----------------------------------
Part 1: if Statement
-----------------------------------

1) if
- Executes code if the condition is true.

Example:
  if ($age >= 18) {
    echo "Allowed";
  }

-----------------------------------
2) if ... else
-----------------------------------
- Executes one block if condition is true,
  another block if false.

Example:
  if ($age >= 18) {
    echo "Allowed";
  } else {
    echo "Not Allowed";
  }

-----------------------------------
3) if ... elseif ... else
-----------------------------------
- Used to test multiple conditions.

Example:
  if ($grade >= 90) {
    echo "Excellent";
  } elseif ($grade >= 75) {
    echo "Very Good";
  } else {
    echo "Failed";
  }

-----------------------------------
Part 2: Advanced if Conditions
-----------------------------------

4) Nested if
- if statements inside another if.

Example:
  if ($isLoggedIn) {
    if ($isAdmin) {
      echo "Admin Panel";
    }
  }

-----------------------------------
5) Alternative Syntax
-----------------------------------
- Used mainly in HTML templates.
- Improves readability.

Syntax:
  if (condition):
    // code
  elseif (condition):
    // code
  else:
    // code


Example:
  if ($age >= 18):
    echo "Adult";
  else:
    echo "Child";


-----------------------------------
6) Ternary Operator
-----------------------------------
- Short form of if...else.
- Used for simple conditions.

Syntax:
  condition ? true_value : false_value;

Example:
  echo ($age >= 18) ? "Adult" : "Child";

-----------------------------------
7) Nested Ternary (Advanced)
-----------------------------------
- Ternary inside another ternary.
- Not recommended for readability.

Example:
  echo ($score >= 90) ? "A" :
       (($score >= 75) ? "B" : "C");

-----------------------------------
Part 3: Switch Statement
-----------------------------------

8) switch
- Used to compare a single value
  against multiple cases.
- Works using loose comparison (==).

Syntax:
  switch ($value) {
    case 1:
      // code
      break;
    case 2:
      // code
      break;
    default:
      // code
  }

Example:
  switch ($day) {
    case "Sat":
      echo "Saturday";
      break;
    case "Sun":
      echo "Sunday";
      break;
    default:
      echo "Unknown Day";
  }

-----------------------------------
Important Notes:
-----------------------------------
- if/elseif is more flexible than switch.
- switch is cleaner for fixed values.
- Always use break in switch cases.
- Ternary is for simple logic only.
- Use parentheses for clarity.

====================================================
*/


$num1 = 10;
$num2 = 20;

if ($num1 > $num2) {
    echo "num1 greater than num2";
} else if ($num1 < $num2) {
    echo " num2 greater than num1";
} else {
    echo " num2 equal num1";
}

echo ($num1 > $num2) ? "num1 greater than num2" : (($num1 == $num2) ? "num1 equal num2" : "num1 less than num2"); 

