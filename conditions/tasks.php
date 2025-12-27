<?php

// Task 1: 
$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/

if ($b > $a && $a === $c && ($a + $c) === $b) {
    echo "Yes";
} else {
    echo "No";
}

// "Yes"

// Task 2: 
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

if ($a > $b)
    echo "A Is Larger Than B";
else if ($a < $c)
    echo "A Is Larger Than c";
else
    echo "A Is Not Larger Than B Or C";

?>
<!-- // Task 3:  -->

<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];

    echo "The Request Method Is Post And Username Is $user\n";

    if (in_array($user, $admins)) {
        echo "This Username $user Is Admin";
    } else {
        echo "This Username $user Is Not Admin";
    }
}

// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
?>

<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>



<?php
// Task 4: 
$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

    echo "A + B = C";

} elseif ($a + $c === $b) {

    echo "A + C = B";

} elseif ($b + $c === $a) {

    echo "B + C = A";

} else {

    echo "The End";

}

// Convert the above condition to this one

($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End"));


// Output
"B + C = A";


// Task 5:  make all conditions in one line
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
    echo "The Age Is Good To Go<br>";
    if (gettype($name) === "string") {
        echo "The Name Is Good To Go<br>";
        if ($country === "Egypt") {
            echo "The Country Is Good To Go<br>";
        }
    }
}

// Solution
($age > 18 && gettype(value: $name) === "string" && $country === "Egypt") &&
    print "The Age Is Good To Go\nThe Name Is Good To Go \n The Country Is Good To Go\n";


// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"


// Task 6: convert the following using switch: 

$genre = "Hack And Slash";

if ($genre === "RPG") {

    echo "I Recommend Ys Games";

} elseif ($genre === "Hack And Slash") {

    echo "I Recommend Castlevania Games";

} elseif ($genre === "FPS") {

    echo "I Recommend Uncharted Games";

} elseif ($genre === "Platform") {

    echo "I Recommend Megaman Games";

} elseif ($genre === "Puzzle") {

    echo "I Recommend Megaman Games";

} else {

    echo "I Recommend Shadow Of Mordor And Shadow Of War";

}


switch ($genre) {
    case "RPG":
        echo "I Recommend Ys Games";
        break;

    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;

    case "FPS":
        echo "I Recommend Castlevania Games";
        break;

    case "Platform":
        echo "I Recommend Megaman Games";
        break;
    case "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
}

// Needed Output
// "I Recommend Castlevania Games"


// Task 7: makee simple calculator with +, - , * , /
$num_one = 23;
$num_two = 5;
$op = "*";

if ($op == "+")
    echo $num_one + $num_two . "\n";
else if ($op == "-")
    echo $num_one - $num_two . "\n";
else if ($op == "*")
    echo $num_one * $num_two . "\n";
else if ($op == "/") {
    echo (int) ($num_one / $num_two) . "\n";
    echo $num_one % $num_two;
} else
    echo "Unknown Operator";


// Task 8: Convert it using if conditions
$day = "Sat";

switch ($day) {
    case "Sat":
    case "Sun":
    case "Mon":
        echo "We Are Open All The Day";
        break;
    case "Tue":
    case "Wed":
        echo "We Are Open From 08:12";
        break;
    case "Thu":
    case "Fri":
        echo "We Are Closed";
        break;
    default:
        echo "Unknown Day";
}

if ($day == "Sat" || $day == "Sun" || $day == "Mon")
    echo "We Are Open All The Day";
else if ($day == "Tue" || $day == "Wed")
    echo "We Are Open From 08:12";
else if ($day == "Thu" || $day == "Fri")
    echo "We Are Closed";
else
    echo "Unknown Day";