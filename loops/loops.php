<?php
/*
====================================================
                PHP LOOPS SUMMARY
====================================================

Loops are used to execute a block of code multiple times
as long as a specific condition is true.

----------------------------------------------------
1) WHILE LOOP
----------------------------------------------------
- Executes the code WHILE the condition is true.
- The condition is checked BEFORE executing the loop body.
- If the condition is false at the beginning, the loop will NOT run.

Syntax:
while (condition) {
    code;
}

Example:
$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}

Output:
1
2
3
4
5

Use when:
- You don't know how many times the loop will run.
- The condition depends on runtime logic.

----------------------------------------------------
2) DO WHILE LOOP
----------------------------------------------------
- Executes the code AT LEAST ONCE.
- The condition is checked AFTER executing the loop body.

Syntax:
do {
    code;
} while (condition);

Example:
$count = 1;

do {
    echo $count . "<br>";
    $count++;
} while ($count <= 5);

Output:
1
2
3
4
5

Important Note:
- Even if the condition is false, the loop runs once.

----------------------------------------------------
3) FOR LOOP
----------------------------------------------------
- Best used when the number of iterations is known.
- Consists of three parts:
  1. Initialization
  2. Condition
  3. Increment / Decrement

Syntax:
for (initialization; condition; increment) {
    code;
}

Example:
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

Output:
1
2
3
4
5

Use when:
- You know exactly how many times the loop should run.

----------------------------------------------------
4) FOREACH LOOP
----------------------------------------------------
- Used specifically for arrays.
- Automatically loops through array values (and keys).

Syntax (values only):
foreach ($array as $value) {
    code;
}

Syntax (keys and values):
foreach ($array as $key => $value) {
    code;
}

Example (Values Only):
$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    echo $color . "<br>";
}

Example (Keys and Values):
$ages = ["Ali" => 21, "Ahmed" => 25];

foreach ($ages as $name => $age) {
    echo "$name is $age years old<br>";
}

Use when:
- Working with arrays.
- You don’t need a counter.

----------------------------------------------------
5) BREAK STATEMENT
----------------------------------------------------
- Used to STOP the loop completely.
- Exits the loop immediately.

Example:
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "<br>";
}

Output:
1
2
3
4

----------------------------------------------------
6) CONTINUE STATEMENT
----------------------------------------------------
- Skips the CURRENT iteration.
- Continues with the NEXT iteration.

Example:
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo $i . "<br>";
}

Output:
1
2
4
5

----------------------------------------------------
SUMMARY TABLE (Conceptually)
----------------------------------------------------
while      → Condition checked BEFORE execution
do while   → Condition checked AFTER execution
for        → Known number of iterations
foreach    → Best for arrays
break      → Exit loop completely
continue   → Skip current iteration

====================================================
*/


$nums = [1, 2, 3, 4, 5];

$count = 0;

while ($count < count($nums)){
    echo "Num". $nums[$count]." From While Loop\n";
    $count++;
}

echo "========================================\n";

$doCount = 0;

do {
    echo "Num". $nums[$doCount]." From Do While Loop\n";
    $doCount++;
} while ($doCount < count($nums));


echo "========================================\n";


for ($i = 0; $i < count($nums); $i++) {
    echo "Num". $nums[$i]." From For Loop\n";
}

echo "========================================\n";


foreach($nums as $num){
    echo "Num".$num." From Foreach Loop\n";
}



