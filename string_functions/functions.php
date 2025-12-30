<?php
/*
====================================================
PHP STRING BUILT-IN FUNCTIONS — SUMMARY WITH EXAMPLES
====================================================

1) STRING BASICS
- A string is a sequence of characters.
- Single quotes do NOT parse variables.
- Double quotes parse variables.

Example:
$name = "Ali";
echo "Hello $name"; // Hello Ali
echo 'Hello $name'; // Hello $name

----------------------------------------------------

2) STRING LENGTH
- strlen(): returns length of string including spaces.

Example:
strlen("Hello PHP"); // 9

----------------------------------------------------

3) CASE CONVERSION
- strtoupper(): converts string to uppercase.
- strtolower(): converts string to lowercase.
- ucfirst(): uppercase first letter.
- lcfirst(): lowercase first letter.
- ucwords(): uppercase first letter of each word.

Examples:
strtoupper("php");        // PHP
strtolower("PHP");        // php
ucfirst("php");           // Php
lcfirst("PHP");           // pHP
ucwords("hello php");     // Hello Php

----------------------------------------------------

4) TRIMMING WHITESPACE
- trim(): removes spaces from both sides.
- ltrim(): removes spaces from left.
- rtrim(): removes spaces from right.

Examples:
trim("  PHP  ");   // "PHP"
ltrim("  PHP");    // "PHP"
rtrim("PHP  ");    // "PHP"

----------------------------------------------------

5) SUBSTRING EXTRACTION
- substr(): extracts part of a string.
- Can use negative index.

Examples:
substr("Hello World", 0, 5);  // Hello
substr("Hello World", -5);    // World

----------------------------------------------------

6) SEARCHING IN STRINGS
- strpos(): first position (case-sensitive).
- stripos(): case-insensitive.
- strrpos(): last position.
- Returns false if not found.

Examples:
strpos("Hello PHP", "PHP");     // 6
stripos("Hello PHP", "php");    // 6
strrpos("PHP PHP", "PHP");      // 4

----------------------------------------------------

7) STRING REPLACEMENT
- str_replace(): replace text (case-sensitive).
- str_ireplace(): case-insensitive.

Examples:
str_replace("PHP", "Laravel", "I love PHP");
// I love Laravel

str_ireplace("php", "Laravel", "I love PHP");
// I love Laravel

----------------------------------------------------

8) STRING COMPARISON
- strcmp(): case-sensitive compare.
- strcasecmp(): case-insensitive.
- Returns 0 if equal.

Examples:
strcmp("Ali", "Ali");       // 0
strcasecmp("PHP", "php");   // 0

----------------------------------------------------

9) STRING ↔ ARRAY CONVERSION
- explode(): string → array.
- implode(): array → string.

Examples:
explode(",", "PHP,JS,HTML");
// ["PHP","JS","HTML"]

implode(" | ", ["PHP","JS","HTML"]);
// PHP | JS | HTML

----------------------------------------------------

10) STRING CHECK FUNCTIONS (PHP 8+)
- str_contains(): checks if string contains value.
- str_starts_with(): checks start.
- str_ends_with(): checks end.

Examples:
str_contains("Hello PHP", "PHP");      // true
str_starts_with("Hello PHP", "Hello"); // true
str_ends_with("Hello PHP", "PHP");     // true

----------------------------------------------------

11) STRING PADDING
- str_pad(): pads string to length.
- Padding types: LEFT, RIGHT, BOTH.

Example:
str_pad("PHP", 10, "*", STR_PAD_BOTH);
// ***PHP****

----------------------------------------------------

12) STRING REPEAT & SHUFFLE
- str_repeat(): repeats string.
- str_shuffle(): random character order.

Examples:
str_repeat("-", 5);     // -----
str_shuffle("ABCDE");   // random order

----------------------------------------------------

13) STRING SPLITTING
- str_split(): splits string into characters.

Example:
str_split("PHP");
// ["P","H","P"]

----------------------------------------------------

14) WORD WRAPPING
- wordwrap(): wraps text after specific length.

Example:
wordwrap("Hello PHP World", 5, "<br>");

----------------------------------------------------

15) HTML & SECURITY FUNCTIONS
- htmlspecialchars(): converts HTML entities (XSS protection).
- strip_tags(): removes HTML tags.

Examples:
htmlspecialchars("<h1>Hello</h1>");
// &lt;h1&gt;Hello&lt;/h1&gt;

strip_tags("<h1>Hello</h1>");
// Hello

----------------------------------------------------

16) NUMBER FORMATTING (STRING OUTPUT)
- number_format(): formats numbers.

Examples:
number_format(1000000);        // 1,000,000
number_format(1234.567, 2);    // 1,234.57

----------------------------------------------------

17) REAL-WORLD EXAMPLES

- Clean user input:
trim($_POST['name']);

- Create slug:
strtolower(str_replace(" ", "-", "Learn PHP Fast"));
// learn-php-fast

- Simple email check:
str_contains("test@mail.com", "@"); // true

----------------------------------------------------

18) MOST IMPORTANT FUNCTIONS TO MASTER
- strlen
- trim
- substr
- strpos
- str_replace
- explode / implode
- strtolower / strtoupper
- htmlspecialchars
- str_contains

----------------------------------------------------

FINAL NOTES:
- String functions are used everywhere in PHP.
- Critical for validation, security, and formatting.
- Required knowledge before Laravel and backend APIs.

====================================================
END OF STRING FUNCTIONS SUMMARY
====================================================
*/



$message = " hello world from PHP 8 ";

echo "Array of Characters\n";

for ($i = 0; $i < strlen($message); $i++) {
    echo "Letter ".( $i + 1 )." : ".$message[$i] . "\n";
}


echo "Length\n";

echo "String Lenght: ". strlen($message) ."\n";


echo "Converstion Functions: \n";

echo strtoupper($message)."\n";
echo strtolower($message)."\n";
echo ucfirst($message)."\n";
echo lcfirst($message)."\n";
echo ucwords($message)."\n";


echo "Trimming: \n";

echo trim($message)."\n";
echo ltrim(string: $message)."\n";
echo rtrim(string: $message)."\n";


echo "Substring: \n";

echo substr($message,0,length: 3)."\n";


echo "Search and postion: \n";

echo strpos($message,"o")."\n"; // search in all string

