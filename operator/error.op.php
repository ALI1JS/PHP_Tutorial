<?php 

/*
====================================================
 PHP Error Control Operator
====================================================

The error control operator (@) is used to **suppress error messages**
that a specific expression might generate.

-----------------------------------
1) Error Control (@)
-----------------------------------
- Placed before an expression to **prevent PHP from outputting errors**.

Example:
  // Without @
  $file = fopen("nonexistent.txt", "r");
  // Warning: fopen(nonexistent.txt): failed to open stream

  // With @
  $file = @fopen("nonexistent.txt", "r");
  // No warning displayed

-----------------------------------
Important Notes:
-----------------------------------
- Only suppresses the error output; it **does not fix the error**.
- Overuse is discouraged; use **proper error handling** instead.
- Can be used with functions, expressions, or variable access that may generate warnings/notices.
- Commonly used when you expect potential errors and want to handle them manually.

Example:
  $value = @$array['key']; // Suppresses "undefined index" notice

====================================================
*/


$name = "ALI";
$username = $name;  // this not give any error


$username = @$name2 or die("Variable not defined");  // this output an error: Notice: Undefined variable: name2 to prevent this error we can use @ operator
echo $username; // no output because $name2 is not defined

// to control the output of the error can use the die function but not the die function will stop the execution of the script

