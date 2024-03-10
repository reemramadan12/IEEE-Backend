<?php
// Replace ? With Arithmetic Operators
echo (10 * 20 + 15 % 3 + 190 + 10) % 400; // 0
?>


<?php
$a = "10";

// Needed Ouput
echo +$a;//10
echo '<br>';
echo gettype(+$a);//integer
echo '<br>';

echo (int) $a;//10
echo '<br>';
echo gettype((int) $a);//integer
echo '<br>';

echo $a += 0;//10
echo '<br>';
echo gettype($a += 0);//integer
echo '<br>';

// For The People Who Love Searching
echo intval(10);//10
echo '<br>';
echo gettype(intval(10));//integer
echo '<br>';

echo $a;//10
echo '<br>';
echo gettype(intval($a, 10));//integer
echo '<br>';
?>


<?php
$a = 10;
$b = 20;

echo ($a - $b) / $a;

/* Needed Output
-1 */
?>


<?php
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
echo '<br>';
var_dump($c > $a); // True
echo '<br>';
var_dump($a <= $b); // True
echo '<br>';
var_dump($a != $b); // True
echo '<br>';
var_dump($a < $c); // True
echo '<br>';
var_dump($a != $c); // True
echo '<br>';
var_dump(gettype($a) == gettype($b)); // True
echo '<br>';
var_dump(gettype($a) === gettype($b)); // True
echo '<br>';
var_dump(gettype((float) $a) != gettype($b)); // True
?>


<?php
$points = 10;

// Write Your Code Here
$points++;
$points++;
$points++;
echo $points; // 13

// Write Your Code Here
$points--;
$points--;
$points--;
$points--;
$points--;
echo '<br>';
echo $points; // 8;
?>


<?php
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
echo $d = "$a $b $c";
echo '<br>';

// Method Two
echo $d = "{$a} {$b} {$c}";
echo '<br>';

// Method Three
echo $d = $a . " " . $b . " " . $c;
echo '<br>';

// Method Four
$d = "Elzero ";
$d .= "Web ";
$d .= "School";
echo $d;
echo '<br>';

// Elzero Web School
?>


<?php
$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10 000
?>


<?php
// Code 1
$a = @$b or die("Custom Error");
echo '<br>';

// Code 2
$f = @file("Not_A_File") or die("Custom Error");
echo '<br>';

// Code 3
(@include("Not_A_File")) or die("Custom Error");

//Custom Error appeares only one time because Once the script reaches a die() statement, it stops executing further code and terminates the script immediately
?>