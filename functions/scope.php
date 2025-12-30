<?php
/*
====================================================
PHP SCOPES — COMPLETE SUMMARY (COMMENT NOTES)
====================================================

1) WHAT IS SCOPE?
- Scope determines where a variable can be accessed.
- PHP has different scopes that control variable visibility.
- Understanding scope prevents unexpected bugs.

----------------------------------------------------

2) GLOBAL SCOPE
- Variables declared outside any function.
- NOT accessible inside functions by default.

Example:
$x = 10; // global scope

function test() {
    // echo $x; ❌ undefined
}

----------------------------------------------------

3) LOCAL SCOPE
- Variables declared inside a function.
- Only accessible inside that function.

Example:
function demo() {
    $y = 5; // local scope
    echo $y;
}
// echo $y; ❌ error

----------------------------------------------------

4) GLOBAL KEYWORD
- Allows accessing global variables inside a function.
- Links local variable to global variable.

Example:
$x = 10;
function show() {
    global $x;
    echo $x; // 10
}

----------------------------------------------------

5) $GLOBALS SUPERGLOBAL
- Associative array containing all global variables.
- Can access globals anywhere without global keyword.

Example:
$x = 20;
function show() {
    echo $GLOBALS['x']; // 20
}

----------------------------------------------------

6) STATIC VARIABLES
- Declared inside a function.
- Value is preserved between function calls.
- Initialized only once.

Example:
function counter() {
    static $count = 0;
    $count++;
    echo $count;
}
counter(); // 1
counter(); // 2

----------------------------------------------------

7) FUNCTION PARAMETERS SCOPE
- Parameters are local variables.
- Exist only during function execution.

Example:
function add($a, $b) {
    // $a and $b are local
    return $a + $b;
}

----------------------------------------------------

8) BLOCK SCOPE (IMPORTANT NOTE)
- PHP does NOT have block scope for if, for, while.
- Variables inside blocks are accessible outside.

Example:
if (true) {
    $x = 10;
}
echo $x; // 10

----------------------------------------------------

9) VARIABLE SCOPE IN LOOPS
- Loop variables are NOT block-scoped.

Example:
for ($i = 0; $i < 3; $i++) {
}
echo $i; // 3

----------------------------------------------------

10) CONSTANTS SCOPE
- Constants are automatically global.
- Accessible everywhere.

Example:
define("SITE_NAME", "MySite");
echo SITE_NAME;

----------------------------------------------------

11) SUPERGLOBALS
- Built-in global arrays available everywhere.
- Do NOT need global keyword.

Examples:
$_GET
$_POST
$_SERVER
$_SESSION
$_COOKIE
$_FILES
$_ENV
$_REQUEST
$GLOBALS

----------------------------------------------------

12) SCOPE WITH INCLUDE / REQUIRE
- Included files share the same variable scope.
- Variables defined before include are accessible inside it.

Example:
$name = "Ali";
include "file.php"; // file.php can use $name

----------------------------------------------------

13) FUNCTION SCOPE VS FILE SCOPE
- Functions create their own local scope.
- Files share global scope unless inside functions.

----------------------------------------------------

14) CLOSURE SCOPE (use keyword)
- Anonymous functions do NOT inherit parent variables.
- use keyword imports variables into closure.

Example:
$msg = "Hello";
$fn = function () use ($msg) {
    echo $msg;
};

----------------------------------------------------

15) ARROW FUNCTION SCOPE
- Arrow functions automatically inherit parent scope.
- No need for use keyword.

Example:
$msg = "Hello";
$fn = fn() => $msg;

----------------------------------------------------

16) STATIC METHODS & CLASS SCOPE (BASIC IDEA)
- Properties belong to class, not object.
- Accessed using self:: or ClassName::.

Example:
class Test {
    static $x = 10;
    static function show() {
        echo self::$x;
    }
}

----------------------------------------------------

SUMMARY:
- Global scope: outside functions
- Local scope: inside functions
- static: preserves value
- global / $GLOBALS: access global variables
- No block scope in PHP
- Closures need use keyword
- Arrow functions auto-capture scope

====================================================
END OF PHP SCOPES SUMMARY
====================================================
*/
