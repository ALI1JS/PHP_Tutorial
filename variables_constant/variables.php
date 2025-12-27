<?php

/*
  3.1 Variables
  - Naming Rules + Info
  [1] Start With Dollar Sign $
  [2] Start With A Letter [a-z] Or [A-Z] Or Underscore (_)
  [3] You Can Use Numbers Inside The Name
  [4] No Special Characters Allowed
  [5] Case Sensitive

*/

$username = "Osama";
$Username = "Elzero";

echo $username;
echo '<br>';
echo $Username;
echo '<br>';
echo 'Hello $username';
echo '<br>';
echo "Hello $username";

?>


<!-- 3.2 Variables in Real World -->

<?php $username = "ALI" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php echo $username ?></title>
</head>

<body>
    <div>Welcome <?php echo $username ?></div>
    <div><?php echo $username ?> You Scored 1000 Points</div>
</body>

</html>




<!-- 3.3 Variable Variable -->

<?php
$a = "ALI";
$$a = "HELLO";
$$$a = "WELCOME TO PHP";

echo $a;
echo '<br>';

echo $$a;
echo $ALI;
echo '<br>';

echo $$$a;
echo $HELLO;
echo '<br>';

echo "Print the variabel of the varibale in string like this: {${$a} } => {${$a} } => {${$$a} }";
echo "Print the variable of the variable: " . ${$a} . " => " . ${$a} . " => " . ${$a};



/*
    Assign Variable By Reference
    - By Default, Variables Are Always Assigned By Value
    - Assigned By Reference Make Variable Alias Or Point To Another

    Search
    - References Are Not Pointers
    - References Just Alias Names To The Same Content In Memory
    - When You Assign By Reference, You Make A New Name Pointing To The Original Variable
    - Changes To Either Variable Will Affect The Other
    - To Assign By Reference, Use The Ampersand & Before The Variable Name
    - Pointers Are Different, They Point To A Specific Memory Location
  */

$name = "ALI";
$familyName = $name; // Assigned By Value

echo "$name";
echo "$familyName";

$country = "Egypt";
$nation = &$country; // Assigned By Reference so any chnage in any variable will affect the other

$nation = "USA";

echo "<br>";    
echo "$country";
echo "$nation";


$country = "KSA";

echo "<br>";    
echo "$country";
echo "$nation";



/*
====================================================
 PHP Predefined (Superglobal) Variables 
====================================================

Predefined (Superglobal) variables are built-in PHP
variables that are always available in all scopes
(functions, classes, files) without using `global`.

-----------------------------------
1) $GLOBALS
-----------------------------------
- Access all global variables.
- Stored as an associative array.
Example:
  $GLOBALS['varName'];

-----------------------------------
2) $_SERVER
-----------------------------------
- Contains server and execution info.
Common keys:
  SERVER_NAME
  REQUEST_METHOD
  PHP_SELF
  HTTP_USER_AGENT

-----------------------------------
3) $_GET
-----------------------------------
- Collects data sent via URL.
- Data is visible in the browser.
- Not secure for sensitive data.

-----------------------------------
4) $_POST
-----------------------------------
- Collects data sent via POST method.
- Data is hidden from URL.
- Used for forms and passwords.

-----------------------------------
5) $_REQUEST
-----------------------------------
- Combines $_GET, $_POST, $_COOKIE.
- Not recommended (security reasons).

-----------------------------------
6) $_FILES
-----------------------------------
- Used for file uploads.
Common keys:
  name, type, size, tmp_name, error

-----------------------------------
7) $_COOKIE
-----------------------------------
- Stores data on client browser.
- Not secure for sensitive data.

-----------------------------------
8) $_SESSION
-----------------------------------
- Stores user data on the server.
- Used for authentication and login.
- Requires session_start().

-----------------------------------
9) $_ENV
-----------------------------------
- Contains environment variables.
- Common in Docker and CI/CD.

-----------------------------------
====================================================
*/


echo $_SERVER['SERVER_NAME'];


/*
====================================================
 PHP Constants
====================================================

A constant is a name or identifier for a fixed value
that cannot be changed during script execution (Run Time).

-----------------------------------
1) Defining Constants
-----------------------------------
- Defined using define() or const keyword.
- Do NOT use $ sign.
- Constant names are usually uppercase.

Examples:
  define("SITE_NAME", "My Website");
  const VERSION = "1.0.0";

-----------------------------------
2) Accessing Constants
-----------------------------------
- Accessed directly by name.
- No $ symbol is used.

Example:
  echo SITE_NAME;

-----------------------------------
3) Global Scope
-----------------------------------
- Constants are automatically global.
- Can be accessed inside functions and classes
  without using global keyword.

-----------------------------------
4) Constant Types
-----------------------------------
- Scalar: string, integer, float, boolean
- Array (supported since PHP 7)

Example:
  define("COLORS", ["red", "green", "blue"]);

-----------------------------------
5) Difference Between define() and const
-----------------------------------
define():
- Can be defined anywhere in the script.
- Can be conditionally defined.
- Name can be dynamic.

const:
- Defined at compile time.
- Cannot be conditional.
- Must be declared at top level or inside class.

-----------------------------------
6) Predefined Constants
-----------------------------------
PHP provides many built-in constants:
  PHP_VERSION
  PHP_OS
  DIRECTORY_SEPARATOR
  __LINE__
  __FILE__
  __DIR__
  __FUNCTION__
  __CLASS__
  __METHOD__
  __NAMESPACE__

-----------------------------------
7) Magic Constants
-----------------------------------
- Start and end with double underscores.
- Change value depending on context.

Examples:
  __LINE__   → current line number
  __FILE__   → full file path
  __DIR__    → directory path

-----------------------------------
Important Notes:
-----------------------------------
- Constants cannot be redefined.
- Constants do not use $ symbol.
- Use constants for configuration values.
- Prefer const inside classes.

====================================================
*/

define("DB_NAME", "omlalty");
echo DB_NAME;

const DB_USER = "root";
echo DB_USER;


echo __LINE__;
echo __FILE__;
echo __DIR__;