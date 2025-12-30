<?php

echo "Task 1: \n";

echo round((disk_total_space("/") / 1024 / 1024 / 1024 / 1024), 2) . "TB \n";

// Output Examples
// "1.37 Terabyte"


echo "Task 2: \n";

$path = "/home/ali/Videos/1 minute funny videos.mp4";
$extention = pathinfo($path, PATHINFO_EXTENSION);

if ($extention == "mp4") {

    $size = filesize($path);
    echo "Size In Megabyte Is " . ($size / 1024 / 1024) . "\n";
    echo "Size In Kilobyte Is " . ($size / 1024) . "\n";
}

// Output
// "Size In Megabyte Is 32"
// "Size In Kilobyte Is 33261"

echo "Task 3: \n";

mkdir("Programming/PHP", 0744, true);

if (file_exists("Programming/PHP")) {

    $removed = rmdir("Programming/PHP");
    echo $removed ? "Directory Programming/PHP Removed \n" : "Error";

}
if (file_exists("Programming")) {

    $removed = rmdir("Programming");
    echo $removed ? "Directory Programming Removed \n" : "Error";

}

// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"


echo "Task 4: \n";

function change_permissions(string $file_name)
{

    // Validation
    if (!file_exists($file_name))
        return "File Not Found";
    if (!is_file($file_name))
        return "This Is Directory And Only Files Allowed";
    if (pathinfo($file_name, PATHINFO_EXTENSION) != "txt")
        return "File Extension Is Not Txt";

    $changed = chmod($file_name, 0700);
    if ($changed)
        return "Permissions Changed";
}


echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed


echo "Task 5: \n";

$filePath1 = $_SERVER['SCRIPT_FILENAME'];
$filePath2 = __FILE__;
$filePath3 = $_SERVER['PHP_SELF'];

echo basename($filePath1) . "\n";
echo basename($filePath2) . "\n";
echo basename($filePath3) . "\n";

// Output

// "index.php"
// "index.php"
// "index.php"
// "index.php"-

echo "Task 6: \n";

$file_path = "elzero.txt";
$content = file_get_contents($file_path);
echo str_replace("\n", " ", str_split($content, 23))[0] . "\n";

$file = fopen($file_path, "r");

$line_counter = 0;
$fget_content = "";

while (($line = fgets($file)) !== false && $line_counter < 2) {
    $line_counter++;
    $fget_content .= $line;
}
fclose($file);

echo str_replace("\n", " ", $fget_content) . "\n";

$file2 = fopen($file_path, "r");


$fread_content = fread($file2, filesize($file_path));
fclose($file2);
echo str_replace("\n", " ", str_split($fread_content, 23))[0] . "\n";



// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"


echo "Task 7: \n";

$content2 = file_get_contents($file_path);
$updated_content = str_replace("Elzero", "Osamaa", $content2);
file_put_contents($file_path, $updated_content);

// elzero.txt Content
// Hello Osamaa Web
// School

// elzero.txt New Content
// Hello Elzero Web
// School