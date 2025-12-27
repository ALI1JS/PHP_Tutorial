<!-- Task 1 : using the varibale we need to chnage the Elzero Courses easily in the future  -->
<?php $title = "Elzero Courses"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $title; ?></title>
  </head>
  <body>
    <h1><?php $title ?></h1>
    <p>Here In <?php echo $title; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $title; ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $title; ?></footer>
  </body>
</html>


<!-- Task 2: Print the (web) word in five diffrent way using echo method only -->

<?php 
$name = "elzero";
$$name = "Web";

echo $$name; // First Way
echo '<br>'; 

echo ${$name}; // Second Way
echo '<br>';

echo $elzero; // Third Way
echo '<br>';

echo "{${$name}}"; // Fourth Way
echo '<br>';

echo "web"; // Fifth Way
echo '<br>';



// Task 3: How to chnage value of b without change it directly
$a = 200;
$b = $a;
$a = 100;

echo $b; // 100
echo '<br>';

// Solution:
$a = 200;
$b = $a;
$a = 100;

echo $b; // 100
echo '<br>';



// Task 4: Print the following server information using predefined variables
echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';

echo $_SERVER['SERVER_NAME'];
echo '<br>';

echo $_SERVER['SYSTEM_ROOT'];
echo '<br>';

echo $_SERVER['OPENSSL_CONF'];
echo '<br>';


/**
 * Task 5: 10 Reserved Keywords in PHP
 * 
 * 1- function
 * 2- echo
 * 3- break
 * 4- clone
 * 5- continue
 * 6- return
 * 7- globale
 * 8- define
 * 9- const
 * 10- namespace 
 */


// Task 6: Print the number of the current line, file, and directory

echo __LINE__;
echo '<br>';

echo __FILE__;
echo '<br>';

echo __DIR__;
echo '<br>';

