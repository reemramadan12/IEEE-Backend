<?php
echo round((disk_total_space("C:") + disk_total_space("E:")) / 1024 / 1024 / 1024 / 1024 , 2) . " Terabyte";
/* Output Examples
"1.37 Terabyte"
"0.46 Terabyte" */
?>


<?php
echo "Size In Megabyte Is " . round((disk_total_space("E:\Movies\About Time")) / 1024 / 1024) . "<br>";
echo "Size In Kilobyte Is " . (disk_total_space("E:\Movies\About Time")) / 1024;

/* Output
"Size In Megabyte Is 32"
"Size In Kilobyte Is 33261" */
?>


<?php
mkdir('Programming/PHP', 0700, true); // Recursively create directory with permissions 0700

if (rmdir('Programming/PHP')) {
    echo "Directory Programming/PHP Removed<br>";
} else {
    echo "Error: Failed to remove directory Programming/PHP<br>";
}

if (rmdir('Programming')) {
    echo "Directory Programming Removed<br>";
} else {
    echo "Error: Failed to remove directory Programming<br>";
}

/*
Output
"Directory Programming/PHP Removed"
"Directory Programming Removed"
*/
?>


<?php
function change_permissions($filename) {
    // Check if the parameter is a file
    if (!is_file($filename)) {
        return "This Is Directory And Only Files Allowed<br>";
    }

    // Check if the file extension is txt
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if ($file_extension !== 'txt') {
        return "File Extension Is Not Txt<br>";
    }

    // Change permissions
    if (chmod($filename, 0600)) { // Owner has read, write, execute permissions
        return "Permissions Changed<br>";
    } else {
        return "Failed to Change Permissions<br>";
    } //xxxxxxxxxxxx
}

// Test Cases
echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed
?>


<?php
//First method
echo basename($_SERVER['PHP_SELF']) . "<br>";
//Second method
echo basename(__FILE__) . "<br>";
//Third method
echo basename($_SERVER['SCRIPT_FILENAME']) . "<br>";
//Fourth method
echo basename($_SERVER['SCRIPT_NAME']) . "<br>";

// Output
// "index.php"
// "index.php"
// "index.php"
// "index.php"
?>


<?php
// Method 1: Using file() with implode()
$file_lines = @file("elzero.txt");
if ($file_lines !== false) {
    echo implode(" ", array_slice($file_lines, 0, 2));
} else {
    echo "Error reading file";
}

echo "<br>";

// Method 2: Using fopen() and fgets()
$handle = @fopen("elzero.txt", "r");
if ($handle !== false) {
    echo fgets($handle);
    echo fgets($handle);
    fclose($handle);
} else {
    echo "Error reading file";
}

echo "<br>";

// Method 3: Using file_get_contents() with explode()
$file_content = @file_get_contents("elzero.txt");
if ($file_content !== false) {
    $file_lines = explode("\n", $file_content);
    echo $file_lines[0] . " " . $file_lines[1];
} else {
    echo "Error reading file";
}

echo "<br>";

// Method 4: Using stream_get_line()
$handle = @fopen("elzero.txt", "r");
if ($handle !== false) {
    echo stream_get_line($handle, 100, "\n") . " " . stream_get_line($handle, 100, "\n");
    fclose($handle);
} else {
    echo "Error reading file";
} //xxxxxxxxx
?>


<?php

?>