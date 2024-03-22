<?php
do {
    $random = rand(11,19);
} while ($random == 10 || $random == 20);
echo $random;
// Example
// 13
// 14
// 19
// 12
?>


<?php
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

$randomIndex = array_rand($friends); //chooses a random index not a name
$randomNames = $friends[$randomIndex]; 
echo $randomNames; 
// Example
// Ibrahim
// Ahmed
?>


<?php
$num1 = 11.5; 
echo round($num1, 0, PHP_ROUND_HALF_ODD) . "<br>"; // 11

$num2 = 9.4898; 
echo round($num2, 1) . "<br>"; // 9.5

$num3 = -7.5; 
echo round($num3, 0, PHP_ROUND_HALF_DOWN); // -7
?>


<?php
// Get the list of all available filters
$filterList = filter_list();

// Initialize an empty array to store filter names and IDs
$filters = [];

// Iterate through the filter list
foreach ($filterList as $filterName) {
    // Get the filter ID based on the filter name
    $filterId = filter_id($filterName);
    // Add the filter name and ID to the array
    $filters[$filterId] = $filterName;
}

// Print the filters array
foreach ($filters as $id => $filter) {
    echo "[$id] => $filter<br>";
}
// Array
// (
//   [257] => int
//   [258] => boolean
//   [259] => float
//   [272] => validate_regexp
//   [277] => validate_domain
//   [273] => validate_url
//   [274] => validate_email
//   [275] => validate_ip
//   [276] => validate_mac
//   [513] => stripped
//   [514] => encoded
//   [515] => special_chars
//   [522] => full_special_chars
//   [516] => unsafe_raw
//   [517] => email
//   [518] => url
//   [519] => number_int
//   [520] => number_float
//   [523] => add_slashes
//   [1024] => callback
// )
?>


<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo (filter_var($url1, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL") . "<br>";
echo (filter_var($url2, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL") . "<br>";
echo (filter_var($url3, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL") . "<br>";
echo (filter_var($url4, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL") . "<br>";

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"
?>


<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

$url1 = filter_var($url1, FILTER_SANITIZE_URL);
$url2 = filter_var($url2, FILTER_SANITIZE_URL);
$url3 = filter_var($url3, FILTER_SANITIZE_URL);
$url4 = filter_var($url4, FILTER_SANITIZE_URL);

echo "$url1 <br>";
echo "$url2 <br>";
echo "$url3 <br>";
echo "$url4 <br>";

// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org
?>