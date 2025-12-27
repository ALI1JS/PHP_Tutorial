<?php

/**
 * 2.1 PHP Data Types
 * 
 *  PHP is Loosely Typed Language
 *
 *                           Data Types
 *                               |
 *               ==================================
 *                 |                               |
 *        Primitive Data Types           Non-Primitive Data Types
 *                 |                               |
 *          ---------------------             -------------------
 *          |       |      |     |             |         |
 *       String   Integer Float Boolean       Array     Object
 *       (string)  (int)  (float) (bool)
 */

$isAttend = true; // (bool) Primitive Data Type
$age = 23; // (int) Primitive Data Type
$height = 170.5; // (float, double) Primitive Data Type
$name = "ALI ISMAIL"; // (string) Primitive Data Type
$grads = ["A", "B", "C"]; // (array) Non-Primitive Data Type
$grads2 = ["grad1" => "A", "grad2" => "B", "grad3" => "C"]; // (array) Non-Primitive Data Type
$employee = array("name" => "ALI ISMAIL", "age" => 23, "height" => 170.5, "isAttend" => true); // (array) Non-Primitive Data Type associative array
$employee2 = array("ALI ISMAIL", 23, 170.5, true); // (array) Non-Primitive Data Type indexed array

// To Get the type of a variable
echo gettype($isAttend) . "\n"; // Output: boolean
echo gettype($age) . "\n"; // Output: integer
echo gettype($height) . "\n"; // Output: double
echo gettype($name) . "\n"; // Output: string
echo gettype($grads) . "\n"; // Output: array
echo gettype($grads2) . "\n"; // Output: array
echo gettype($employee) . "\n"; // Output: array
echo gettype($employee2) . "\n"; // Output: array




/**
 * 2.2 PHP Type Juggling and Automatic Type Conversion: 
 *   PHP automatically converts types based on the context in which a variable is used.
 *   For example, when performing arithmetic operations, PHP will convert strings to numbers if necessary.
 *   so the output type will depend on the operation performed.
 */

echo 2 + "3" . "\n"; // Output: 5 (string "3" is converted to integer 3)
echo gettype(2 + "3") . "\n"; // Output: integer

echo "10 apples" + 5 . "\n"; // Output: 15 (string "10 apples" is converted to integer 10) and it provides a warning
echo gettype("10 apples" + 5) . "\n"; // Output: integer and it provides a warning

echo true + 1 . "\n"; // Output: 2 (boolean true is converted to integer 1)
echo gettype(true + 1) . "\n"; // Output: integer

echo true + true . "\n"; // Output: 2 (both boolean true are converted to integer 1)
echo gettype(true + true) . "\n"; // Output: integer



/**
 * 2.3 PHP Type Casting: 
 *   You can explicitly convert a variable from one type to another using type casting.
 *   This is done by prefixing the variable with the desired type in parentheses.
 *   The common type casts are (int), (float), (string), (bool), and (array).
 *   
 */

$var1 = "123"; // string
$intVar = (int) $var1; // Explicitly cast to integer
echo gettype($intVar) . "\n"; // Output: integer

$var2 = 45.67; // float
$stringVar = (int) $var2; // Explicitly cast to integer
echo gettype($stringVar) . "\n"; // Output: integer  


/**
 * 2.4 Boolean + Converting to Boolean: 
 *   - Any Empty Value is considered as FALSE in Boolean Context and any Non-Empty Value is considered as TRUE in Boolean Context.
 *   - var_dump() function is used to display structured information about one or more expressions that includes its type and value.
 */

var_dump(0); // integer 
var_dump((bool) 0); // bool(false)

var_dump(""); // string(0)
var_dump((bool) ""); // bool(false)

var_dump("Hello"); // string(5)
var_dump((bool) "Hello"); // bool(true)

var_dump([]); // array(0)
var_dump((bool) []); // bool(false)

var_dump(array()); // array(0)
var_dump((bool) array()); // bool(false)

var_dump([1, 2, 3]); // array(3)
var_dump((bool) [1, 2, 3]); // bool(true)

var_dump(null); // NULL
var_dump((bool) null); // bool(false)

var_dump(10); // integer
var_dump((bool) 10); // bool(true)


/**
 * 2.5 String and Escaping: 
 *   - Strings in PHP can be defined using single quotes (' ') or double quotes (" ").
 *   - Double-quoted strings support variable interpolation and escape sequences, while single-quoted strings do not.
 *   - Escape sequences allow you to include special characters in strings.
 *   - Common escape sequences include:
 *      - \n : New Line
 *      - \t : Tab
 *      - \\ : Backslash
 *      - \' : Single Quote
 *      - \" : Double Quote
 * 
 */

echo "Hello, World!\n"; // Using double quotes with escape sequence for new line
echo 'Hello, World!\n'; // Using single quotes, escape sequence will not be interpreted


echo "She said, \"Hello!\"\n"; // Using double quotes with escaped double quote
echo 'She said, \'Hello!\'\n'; // Using single quotes with escaped single quote




/**
 * ============================================================
 *              2.6  HEREDOC & NOWDOC 
 * ============================================================
 *
 * 1) HEREDOC (<<<)
 * ------------------------------------------------------------
 * - Used for multi-line strings
 * - Works like double quotes " "
 * - Variables ARE parsed
 * - Escape characters (\n, \t) work
 * 
 *   WHEN TO USE HEREDOC:
 *    - When text contains variables
 *    - When generating dynamic content
 *    - When writing HTML with PHP variables
 *
 *
 * Example:
 *
 *   $name = "Ali";
 *
 *   $text = <<<TEXT
 *   Hello $name
 *   Welcome to PHP
 *   TEXT;
 *
 *   Output:
 *   Hello Ali
 *   Welcome to PHP
 *
 *
 * 2) NOWDOC (<<<'')
 * ------------------------------------------------------------
 * - Used for multi-line strings
 * - Works like single quotes ' '
 * - Variables are NOT parsed
 * - Escape characters do NOT work
 *
 *  WHEN TO USE NOWDOC:
 * - When you want raw / static text
 * - When text must not be changed by PHP
 * - When writing SQL, config files, or code examples 
 * 
 * Example:
 * 
 *   $query = <<<'SQL'
 *   SELECT * FROM users WHERE name = '$name';
 *   SQL;
 *
 *   $name = "Ali";
 *
 *   $text = <<<'TEXT'
 *   Hello $name
 *   Welcome to PHP
 *   TEXT;
 *
 *   Output:
 *   Hello $name
 *   Welcome to PHP
 *
 *
 * 3) QUICK DIFFERENCE
 * ------------------------------------------------------------
 * - Heredoc  → Dynamic text (variables allowed)
 * - Nowdoc   → Static / raw text
 *
 * Memory Tip:
 * - "HereDoc"  → Here variables work
 * - "NowDoc"   → No variables work
 * 
 * 
 * 
 * * WHY USE HEREDOC / NOWDOC ?
 * ------------------------------------------------
 * - Writing long multi-line text becomes cleaner
 * - No need to escape quotes ( ' or " )
 * - Better readability for:
 *     • HTML templates
 *     • Email messages
 *     • SQL queries
 *     • Documentation text
 *
 * 
 * WHY NOT USE SINGLE OR DOUBLE QUOTES ?
 * ------------------------------------------------
 * - Long text with quotes becomes hard to read
 * - You must escape quotes many times ( \"  \' )
 * - Multi-line strings look messy
 *
 * Heredoc / Nowdoc = Cleaner + Readable + Professional
 *
 *
 * ============================================================
 */


// Example:

$name = "Ali";

$textHere = <<<TEXT
   Hello $name
   Welcome to PHP
   TEXT;

echo $textHere . "\n";

// Output:
// Hello Ali
// Welcome to PHP


$name = "Ali";

$textNow = <<<'TEXT'
    Hello $name
    Welcome to PHP
    TEXT;

echo $textNow . "\n";

// Output:
// Hello $name
// Welcome to PHP


/**
 * ================================================================
 *                          ARRAYS — SUMMARY
 * ================================================================
 *
 * WHAT IS AN ARRAY?
 * ------------------------------------------------
 * - An array stores multiple values in one variable
 * - Values are accessed using an index or a key
 *
 *
 * 1) INDEXED ARRAY
 * ------------------------------------------------
 * - Uses numeric indexes (0, 1, 2, ...)
 * - Order matters
 *
 * Example:
 *
 *   $colors = ["Red", "Green", "Blue"];
 *
 *   $colors[0];  // Red
 *   $colors[1];  // Green
 *
 * WHEN TO USE:
 * - When working with lists
 * - When order is important
 * - Example: products, names, scores
 *
 *
 * 2) ASSOCIATIVE ARRAY
 * ------------------------------------------------
 * - Uses named keys instead of numbers
 * - Key => Value pairs
 *
 * Example:
 *
 *   $user = [
 *     "name"  => "Ali",
 *     "age"   => 21,
 *     "role"  => "Student"
 *   ];
 *
 *   $user["name"]; // Ali
 *   $user["age"];  // 21
 *
 * WHEN TO USE:
 * - When data has meaning
 * - When accessing values by name
 * - Example: user data, settings, configs
 *
 *
 * 3) MULTIDIMENSIONAL ARRAY
 * ------------------------------------------------
 * - An array containing **other arrays**
 * - Can store complex data structures
 *
 * Example:
 *
 *   $employees = [
 *     "ahmed" => ["age"=>25, "role"=>"Developer"],
 *     "sara"  => ["age"=>28, "role"=>"Designer"]
 *   ];
 *
 *   $employees["ahmed"]["role"]; // Developer
 *
 * WHEN TO USE:
 * - Storing structured data like users, products, or settings
 *
 *
 * 4) MIXED ARRAY
 * ------------------------------------------------
 * - Combines **indexed + associative keys** in the same array
 * - Can also have **auto-indexed values**
 * - Duplicate keys are **overridden by last definition**
 *
 * Example:
 *
 *   $data = [
 *     "name" => "Ali",      // associative
 *     0      => "PHP",      // indexed
 *     "age"  => 21,         // associative
 *     0      => "MySQL",    // overrides previous 0
 *     "role" => "Student",  // associative
 *     "PHP"                  // auto-indexed → next numeric key
 *   ];
 *
 *
 * 5) OVERRIDING ARRAY VALUES
 * ------------------------------------------------
 * - Assigning a new value to an existing index or key replaces the old value
 *
 * Indexed Override:
 *
 *   $colors[1] = "Yellow";
 *
 * Associative Override:
 *
 *   $user["age"] = 22;
 *
 *
 * WHY USE ARRAYS?
 * ------------------------------------------------
 * - Organize related data
 * - Reduce number of variables
 * - Easy looping and manipulation
 *
 * WHY NOT USE MANY VARIABLES?
 * ------------------------------------------------
 * - Hard to manage
 * - Not scalable
 * - Difficult to loop through
 *
 * MEMORY TIP:
 * ------------------------------------------------
 * - Indexed Array     → Numbers as keys
 * - Associative Array → Names as keys
 * - Multidimensional  → Arrays inside arrays
 * - Mixed Array       → Indexed + Associative in same array
 *
 * ================================================================
 */


$names = ["Ali", "Ahmed", "Sara"]; // Indexed Array
echo $names[0] . "\n"; // Output: Ali
print_r($names); // Output: Array ( [0] => Ali [1] => Ahmed [2] => Sara )



$employee = [
    "ahmed" => [
        "name" => "ahmed",
        "age" => 25,
        "role" => "Developer"
    ],
    2 => [
        "name" => "Sara",
        "age" => 28,
        "role" => "Designer"
    ],

    "ali",
    0 => [
        "name" => "Mohamed",
        "age" => 23,
        "role" => "Student"
    ],
    2 => [
        "name" => "Sara override",
        "age" => 28,
        "role" => "Designer",
    ]
];


print_r($employee);
// Output:

// Array
// (
//     [ahmed] => Array
//         (
//             [name] => ahmed
//             [age] => 25
//             [role] => Developer
//         )

//     [2] => Array
//         (
//             [name] => Sara override
//             [age] => 28
//             [role] => Designer
//         )

//     [3] => ali
//     [0] => Array
//         (
//             [name] => Mohamed
//             [age] => 23
