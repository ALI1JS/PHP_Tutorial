<?php

$index = 10;

echo "Task 1: Print numbers from 10 to 1 \n";
// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1

for ($i = $index; $i >= 1; $i--) {
    echo $i . "\n";
}


echo "========================================\n";


echo "Task 2: Print even numbers from 1 to 20 \n";

for ($i = $index2; $i <= 20; $i++) {

    if ($i == 0)
        continue;

    if ($i % 2 == 0)
        echo $i . "From For \n";
}

echo "========================================\n";

while ($index2 <= 20) {

    if ($index2 != 0 && $index2 % 2 == 0) {
        echo $index2 . " From While\n";
    }

    $index2++;
}

echo "========================================\n";


do {
    if ($index2 != 0 && $index2 % 2 == 0) {
        echo $index2 . " From Do While\n";
    }

    $index2++;
} while ($index2 <= 20);


echo "Task 3: ===============================\n";

$start = 10;
$end = 0;
$stop = 3;

for ($i = $start; $i >= $stop; $i--) {
    echo ($i == 10) ? $i . "\n" : ("0" . $i) . "\n";
}

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03


echo "Task 4: =========================================\n";


$start2 = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = $start2; $i < count($mix); $i++) {
    if ($mix[$i] === 1 || is_string($mix[$i]))
        continue;
    echo $mix[$i] . "\n";
}
// Output
// 2
// 3
// 4


echo "Task 5: ==============================================\n";

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $name => $cost) {
    echo "The Name Is " . $name . " And I Need " . $cost . " Pound From Him\n";
}


// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"



echo "Task6: =======================================================\n";

$mix = [1, 2, "A", "B", "C", 3, 4];

$numCount = 0;
$letterCount = 0;

foreach ($mix as $item) {

    if (is_string($item)) {
        $letterCount++;
        continue;
    } else {
        echo $item . "\n";
        $numCount++;
    }
}

echo $numCount . " Numbers Printed\n";
echo $letterCount . " Letters Ignored\n";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"


echo "Task 7: Print The even number after divide it on 2 \n";

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $num) {

    if ($num % 2 == 0) echo $num / 2 . "\n";
}

// Output
// 6
// 10
// 15


echo "Task 8: ==============================\n";

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach ($nums as $num) {
  echo "\" $num + $nums[$help_num] = " . $num + $nums[$help_num] ."\"\n";
  $help_num--;
}

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"