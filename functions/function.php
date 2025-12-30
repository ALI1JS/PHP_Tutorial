<?php
/*
====================================================
PHP FUNCTIONS — SUMMARY
====================================================

1) WHAT IS A FUNCTION?
- A function is a reusable block of code.
- It helps organize code, reduce repetition, and improve readability.
- Functions are defined once and can be called many times.

----------------------------------------------------

2) BASIC FUNCTION SYNTAX
- function keyword is used to define a function.
- Function name must be unique.
- Code inside {} executes when function is called.

Example:
function hello() {
    echo "Hello PHP";
}
hello();

----------------------------------------------------

3) PARAMETERS & ARGUMENTS
- Parameters: variables defined in function declaration.
- Arguments: values passed to function when calling it.

Example:
function greet($name) {
    echo "Hello $name";
}
greet("Ali");

----------------------------------------------------

4) DEFAULT PARAMETER VALUES
- Parameters can have default values.
- Default parameters must be placed at the end.

Example:
function welcome($name = "Guest") {
    echo "Welcome $name";
}
welcome();        // Guest
welcome("Ali");   // Ali

----------------------------------------------------

5) RETURN STATEMENT
- return sends a value back to the caller.
- return stops function execution.

Example:
function sum($a, $b) {
    return $a + $b;
}

----------------------------------------------------

6) PASS BY VALUE (DEFAULT)
- A copy of the variable is passed to function.
- Original variable is NOT modified.

Example:
function addFive($num) {
    $num += 5;
}
$x = 10;
addFive($x); // $x still 10

----------------------------------------------------

7) PASS BY REFERENCE
- Use & before parameter name.
- Original variable WILL be modified.

Example:
function addFive(&$num) {
    $num += 5;
}
$x = 10;
addFive($x); // $x becomes 15

----------------------------------------------------

8) VARIABLE FUNCTIONS
- Function can be called using a variable.
- Useful for dynamic function execution.

Example:
function test() {
    echo "Test";
}
$func = "test";
$func();

----------------------------------------------------

9) BUILT-IN FUNCTION: function_exists()
- Checks if a function is already defined.
- Prevents redeclaration errors.

Example:
if (function_exists("test")) {
    echo "Function exists";
}

----------------------------------------------------

10) ANONYMOUS FUNCTIONS (CLOSURES)
- Functions without names.
- Often stored in variables or used as callbacks.

Example:
$greet = function ($name) {
    return "Hello $name";
};

----------------------------------------------------

11) USE KEYWORD (CLOSURE SCOPE)
- Allows anonymous functions to access variables
  from parent scope.

Example:
$msg = "Hello";
$fn = function () use ($msg) {
    echo $msg;
};

----------------------------------------------------

12) ARROW FUNCTIONS (PHP 7.4+)
- Short syntax for anonymous functions.
- Single expression only.
- Automatically returns value.
- Automatically captures parent variables.

Example:
$sum = fn($a, $b) => $a + $b;

----------------------------------------------------

13) SPLAT OPERATOR (...)
- Used for variadic functions.
- Accepts unlimited number of arguments.
- Packs arguments into an array.

Example:
function total(...$numbers) {
    return array_sum($numbers);
}

----------------------------------------------------

14) PACKING ARGUMENTS
- Collect multiple arguments into an array
  using ... in function parameters.

Example:
function show(...$items) {
    print_r($items);
}

----------------------------------------------------

15) UNPACKING ARGUMENTS
- Spread array values as function arguments
  using ... when calling function.

Example:
function add($a, $b, $c) {
    return $a + $b + $c;
}
$arr = [1, 2, 3];
add(...$arr);

----------------------------------------------------

16) TYPE HINTING
- Specify expected data types.
- Improves code safety.

Example:
function multiply(int $a, int $b): int {
    return $a * $b;
}

----------------------------------------------------

17) STRICT TYPES
- Forces strict type checking.
- Prevents automatic type conversion.

Example:
declare(strict_types=1);

----------------------------------------------------

18) RECURSIVE FUNCTIONS
- Function calls itself.
- Must have a base condition to stop.

Example:
function factorial($n) {
    if ($n <= 1) return 1;
    return $n * factorial($n - 1);
}

----------------------------------------------------

19) CALLBACK FUNCTIONS
- Function passed as an argument to another function.

Example:
function apply($num, $callback) {
    return $callback($num);
}

----------------------------------------------------

20) FUNCTION SCOPE & global KEYWORD
- Variables inside function are local.
- global keyword accesses global variables.

Example:
$count = 0;
function inc() {
    global $count;
    $count++;
}

----------------------------------------------------

SUMMARY:
- Functions are core building blocks in PHP.
- Master closures, arrow functions, and splat operator.
- Essential for modern PHP & Laravel development.

====================================================
END OF PHP FUNCTIONS SUMMARY
====================================================
*/


function sayMessage (string $someOne, string $message): string {
    return "". $someOne ."". $message ."";
}

echo sayMessage("ALI","Good Morning")."\n";


echo "=========================================================\n";


function sum (int $num1, int $num2 = 20):int {
  return $num1 + $num2;
}

echo sum(20)."\n";

echo "=========================================================\n";


$num1 = 10;

echo " Pass By Value:\n";
function passByVlaue (int $num): int {
    return ++$num;
}

echo passByVlaue($num1)."\n";
echo $num1 . "\n";  // Why num1 doesn't increament however the function increamnet it as we pass it as a value not reference


echo "==========================\n";

echo " Pass By Reference:\n";
function passByRef (int &$num): int {
    return ++$num;
}

echo passByRef($num1)."\n";
echo $num1 . "\n";  // Why num1 increament as we pass it as reference not value


echo "=========================================================\n";

echo "Variable Function\n";

function varFun (string $message): string {

    return $message;
}

$func1 = "varFun";
echo "call the function by varibale: \n" . $func1("Hello");

echo "=========================================================\n";

echo "Arrow Function \n";

$arrowFunc = fn (int $num1): int => $num1;
echo $arrowFunc(5)."\n";

echo "=========================================================\n";

echo "Annomous Function \n";

$ann = function (int $num1) {
    return $num1;
};

echo $ann(10)."\n";