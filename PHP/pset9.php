<?php
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

// Split the array into chunks of size 2
$chunks = array_chunk($friends, 2, true);

// Convert keys to lowercase for each chunk
$result = [];
foreach ($chunks as $chunk) {
    $result[] = array_change_key_case($chunk, CASE_LOWER);
}

// Output the result
echo "Array<br>(";
foreach ($result as $r) {
    echo "<br>Array (" . print_r($r, true) . ")";
}
echo "<br>)";
?>


<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

// Combine the two arrays
$result = array_combine($codes, $means);

// Convert keys to lowercase
$result = array_change_key_case($result, CASE_LOWER);

// Output the result
echo "Array<br>(<br>";
foreach ($result as $key => $value) {
    echo "  [" . strtolower($key) . "] => $value<br>";
}
echo ")";
?>


<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];

// Exchange keys and values, then convert keys to lowercase
$result = array_change_key_case(array_flip($friends), CASE_LOWER);

// Output the result
echo "Array<br>(<br>";
foreach ($result as $key => $value) {
    echo "  [$key] => $value<br>";
}
echo ")";
?>


<?php
$nums = [10, 20, 30];

// Using array_reduce with anonymous function
$result = array_reduce($nums, function ($carry, $item) {
    return $carry + $item;
});

echo $result; // 60
echo "<br>";

// Using array_sum()
$result = array_sum($nums);

echo $result; // 60
?>


<?php
$nums = [5, 10, 20, 5, 30, 40];

$filtered_nums = array_filter($nums, function($num) {
    return $num !== 5; // return the numbers which isn't 5
});

$result = array_sum($filtered_nums);

echo $result; //100
?>


<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo "Array<br>(<br>" . implode("<br>", array_map(function($key, $value) use ($char) { return "[$key] => $value"; }, array_merge(array_keys($chars), range(5, 9)), array_merge($chars, array_fill(0, 5, $char)))) . "<br>)";
// Output
/*
Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
  [4] => E
  [5] => @
  [6] => @
  [7] => @
  [8] => @
  [9] => @
) */
?>


<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"
next($names);
echo current($names) . "<br>"; // "Ali"
reset($names);
echo current($names) . "<br>"; // "Osama"
next($names);
echo current($names) . "<br>"; // "Mahmoud"
?>


<?php
$chars = ["A", "B", "C"];

// Method 1: Using array_push() function
array_push($chars, "D");
print_r($chars);
echo "<br>";

// Method 2: Using assignment with index
$chars[] = "D";
print_r($chars);
echo "<br>";

// Method 3: Using array_merge() function
$chars = array_merge($chars, ["D"]);
print_r($chars);
echo "<br>";

// Method 4: Using direct assignment
$chars[count($chars)] = "D";
print_r($chars);
//xxxxx
?>


<?php
$nums = [1, 2, 3, 4, 5, 6];
$output = array_slice($nums, -5, 3);
print_r($output);

/*
Array
(
    [0] => 2
    [1] => 3
    [2] => 4
) */ //xxxx
?>


<?php
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

$mix = array_merge(array_slice($mix, 0, 3), $nums, array_slice($mix, 6));
print_r($mix);
// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// ) xxxxx
?>


<?php
$arr = ["A", "B", "C", "D", "E"];
$count = 0;

foreach ($arr as $element) {
    $count++;
}

echo $count; //5
?>


<?php
$nums = [11, 2, 10, 7, 20, 50];
$sum = 0;

foreach ($nums as $num) {
    $sum += $num;
}

echo $sum; // 100
?>


<?php
$nums = [10, 100, -20, 50, 30];
$max = $nums[0];

foreach ($nums as $num) {
    if ($num > $max) {
        $max = $num;
    }
}

echo $max; //100
?>


<?php
$nums = [10, 100, -20, 50, 30];
$min = $nums[0];

foreach ($nums as $num) {
    if ($num < $min) {
        $min = $num;
    }
}

echo $min; //-20
?>


<?php
$chars = ["o", "r", "e", "z", "l", "E"];
$target = ["E", "l", "z", "e", "r", "o"];
$result = "";

foreach ($target as $char) {
    foreach ($chars as $c) {
        if (strtolower($c) === strtolower($char)) {
            $result .= $c;
            break; // Move to the next character in the target
        }
    }
}

echo $result; // Elzero xxxx
?>


<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$result = [];

foreach ($mix as $element) {
    if (is_numeric($element) && $element % 2 !== 0) {
        $result[] = $element;
    }
}

print_r($result);
// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// ) xxxxxxx
?>


<?php
$nums = [1, 2, 3, 4, 5, 6];
shuffleArray($nums);
printShuffledArray($nums, "Example 1");

shuffleArray($nums);
printShuffledArray($nums, "Example 2");

function shuffleArray(&$array) {
    $count = count($array);
    for ($i = $count - 1; $i > 0; $i--) {
        $j = rand(0, $i);
        if ($i !== $j) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

function printShuffledArray($array, $example) {
    echo "Array<br>";
    echo "(<br>";
    foreach ($array as $value) {
        echo "&nbsp;&nbsp;[$value]<br>";
    }
    echo ")<br><br>";
}


// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )
?>


<?php
$title = "E&z\$r0 W\$b Sch00&";
$replaced_title = str_replace(['&', '$', '0'], '', $title, $count);
echo $replaced_title . "<br>";
echo $count;
// Output
// "Elzero Web School"
// 7 xxxxx
?>