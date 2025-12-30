<?php


echo "Task1: ========================\n";
function greeting(string $name, ?string $title): string
{

    $finalMsg = "Hello ";
    if ($title == "Male")
        $finalMsg .= "Mr $name";
    elseif ($title == "Female")
        $finalMsg .= "Mis $name";
    else
        $finalMsg .= "$name";

    return $finalMsg;
}

// Needed Output
echo greeting("Osama", "Male") . "\n"; // Hello Mr Osama
echo greeting("Eman", "Female") . "\n"; // Hello Miss Eman
echo greeting("Sameh", null) . "\n"; // Hello Sameh


echo "Task2: ========================\n";


function get_arguments(...$args): string
{
    $allMsg = "";

    foreach ($args as $arg) {
        $allMsg .= $arg . " ";
    }
    return $allMsg;
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School") . "\n"; // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP") . "\n"; // I Love PHP


echo "Task3: ========================\n";

function sum_all(...$args): int
{
    $total = 0;
    foreach ($args as $arg) {
        if ($arg == 5)
            continue;
        else if ($arg == 10)
            $total += $arg * 2;
        else
            $total += $arg;
    }
    return $total;
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10) . "\n"; // 64
echo sum_all(5, 10, 5, 10) . "\n"; // 40



echo "Task4: ========================\n";

function multiply(...$args): int
{
    $total = 1;

    foreach ($args as $arg) {
        if (is_string($arg))
            continue;
        else
            $total *= (int) $arg;

    }
    return $total;
}

// Needed Output
echo multiply(10, 20) . "\n"; // 200
echo multiply("A", 10, 30) . "\n"; // 300
echo multiply(100.5, 10, "B") . "\n"; // 1000


echo "Task5: ========================\n";

function check_status($a, $b, $c)
{

    $items = [$a, $b, $c];
    $name = "";
    $age = null;
    $status = false;

    foreach ($items as $item) {
        if (gettype($item) == "string")
            $name = $item;
        else if (gettype($item) == "integer")
            $age = $item;
        else
            $status = $item;
    }

    return "Hello $name, Your Age Is $age, You Are " . ($status == true ? "Available" : "Not Available") . " For Hire";

}
// Needed Output
echo check_status("Osama", 38, true) . "\n"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true) . "\n"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama") . "\n"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38) . "\n"; // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"



echo "Task6: ========================\n";
// Write Function Content Here

function calculate(int|float $num1, int|float $num2, string $op = "+"): int|string
{

    $result = 0;

    // Validation : 
    if ($op != "+" && $op != "-" && $op != "*" && $op != "/")
        return "Wrong Operation";

    switch ($op) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
    }

    return $result;
}

// Needed Output
echo calculate(10, 20) . "\n"; // 30
echo calculate(10, 20, "+") . "\n"; // 30
echo calculate(10, 20, "-") . "\n"; // -10
echo calculate(10, 20, "-") . "\n"; // -10
echo calculate(10, 20, "*") . "\n"; // 200
echo calculate(10, 20, "*") . "\n"; // 200


echo "Task7: ========================\n";


function calculate_two_numbers(int $num_one, int $num_two)
{
    return (float) ($num_one + $num_two);
}

echo calculate_two_numbers(20, 10) . "\n"; // 30
echo gettype(calculate_two_numbers(20, 10)) . "\n"; // Double


echo "Task8: ========================\n";

$message = "Hello";

function say_hello(string $name): string
{
    return $GLOBALS['message'] . " " . $name;
}

$$message = "say_hello";


echo $Hello("Osama")."\n"; // Hello Osama


echo "Task9: ========================\n";

$greet = function (string $name) {
   return "Greetings $name";
};

$greet_arrow = fn (string $name) => "Greetings $name";
// Needed Output
echo $greet("Osama"); // Greetings
