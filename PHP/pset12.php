<?php
// Set the timezone to Riyadh
date_default_timezone_set('Asia/Riyadh');

// Print the timezone
echo date_default_timezone_get() . "<br>";

// Print the date in the specified format
echo date("D, d M y - h:i:s A") . "<br>";

// Print the date in the specified format
echo date("l, d F Y - h:i:s A") . "<br>";

// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"
?>


<?php
// Set the timezone to Cairo
date_default_timezone_set('Africa/Cairo');

// Print the timezone
echo date_default_timezone_get() . "<br>";

// Original date
$date = "2005-10-02";

// Add 15 hours, 15 minutes, and 15 seconds to the original date
$date = date("Y, F, l \\'d\\'S H:i:s", strtotime($date . " +15 hours +15 minutes +15 seconds"));

// Print the modified date in the specified format
echo $date . "<br>";

// Output Needed
//"Africa/Cairo"
//"2005, October, Sunday '02nd' 15:15:15"
?>


<?php
$date = "1990-10-01";

// Calculate days since epoch time
$days_since_epoch = floor((strtotime($date) - strtotime('1970-01-01')) / (60 * 60 * 24));

// Calculate years since epoch time
$years_since_epoch = $days_since_epoch / 365.25;

// Print the result in the specified format
echo "From Epoch Time Till $date Is Approximately " . number_format($days_since_epoch, 1) . " Days<br>";
echo "From Epoch Time Till $date Is Approximately " . number_format($years_since_epoch, 1) . " Years<br>";


// Output Needed
//"From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
//"From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
?>


<?php
$date = "1990-10-01";

// Convert the date to DateTime object
$date_time = new DateTime($date);

// Get the current date and time as DateTime object
$epoch_time = new DateTime('1970-01-01');

// Calculate the difference between the given date and epoch time
$interval = date_diff($epoch_time, $date_time);

// Get the difference in days
$days_since_epoch = $interval->days;

// Calculate the difference in years
$years_since_epoch = $days_since_epoch / 365;

// Print the result in the specified format
echo "From Epoch Time Till $date Is Approximately " . number_format($days_since_epoch) . " Days<br>";
echo "From Epoch Time Till $date Is Approximately " . number_format($years_since_epoch) . " Years<br>";


//output needed
//"From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
//"From Epoch Time Till 1990-10-01 Is Approximately 20 Years"
?>


<?php
// Method 1: Using strtotime() with "now"
echo strtotime("now") . "<br>";

// Method 2: Using DateTime with format('U')
$date = new DateTime();
echo $date->format('U') . "<br>";

// Method 3: Using microtime() and extracting the time
echo explode(' ', microtime())[1] . "<br>";

// Output Needed With Other Ways
// 1668020233
// 1668020233
// 1668020233
?>