<?php
$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
if($b > $a && $a === $c && $a + $c === $b){
    echo "Yes";
}
 ?>


<?php
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C
if($a > $b || $a > $c){
    echo "A is larger than B or C";
} else{
    echo "A is not larger than B or C";
}

// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B
if($a > $b){
    echo "A is larger than B";
}else{
    echo "A is smaller than B";
}

// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c
if($a > $c){
    echo "A is larger than C";
}else{
    echo "A is smaller than C";
}
 ?>


<?php
/*Needed Output
"The Request Method Is Post And Username Is Osama"
"This Username Osama Is Admin" */
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    echo "The Request Method Is Post And Username Is $username";
    echo '<br>';

    if (in_array($username, $admins)) {
        echo "This Username $username Is Admin";
    }
}
?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>


<?php
$a = 30;
$b = 20;
$c = 10;
/*
if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

} */
echo $a + $b === $c ? "A + B = C" : ($a + $c === $b ? "A + C = B" : ($b + $c === $a ? "B + C = A" : "The End")); 

// Output
//"B + C = A"
 ?>


<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
  echo "The Age Is Good To Go<br>";
  echo "The Name Is Good To Go<br>";  
  echo "The Country Is Good To Go<br>";
    }

// Needed Output
/* "The Age Is Good To Go"
"The Name Is Good To Go"
"The Country Is Good To Go" */
 ?>


<?php
$genre = "Hack And Slash";

switch ($genre) {
    case "RPG":
        echo "I Recommend Ys Games";
        break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case "FPS":
        echo "I Recommend Uncharted Games";
        break;
    case "Platform":
    case "Puzzle":    
        echo "I Recommend Megaman Games";
        break;    
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
        break;
}

// Needed Output
//"I Recommend Castlevania Games"
 ?>


<?php
$num_one = 23;
$num_two = 5;
$op = "+";

if ($op === "+"){
 echo $num_one + $num_two;
}
elseif ($op === "-"){ 
 echo $num_one - $num_two;
}
elseif ($op === "/"){ 
 echo (int)($num_one / $num_two);
 echo '<br>';
 echo $num_one % $num_two;
}
elseif ($op === "*"){ 
 echo $num_one * $num_two;
}
else{ 
 echo "Unknown Operation";
}
 ?>


<?php
$day = "Sat";

if($day == "Sat" || $day == "Sun" || $day == "Mon"){
    echo "We Are Open All The Day";
} elseif ($day == "Tue" || $day == "Wed") {
    echo "We Are Open From 08:12";
} elseif ($day == "Thu" || $day == "Fri") {
    echo "We Are Closed";
} else {
    echo "Unknown Day";
}
 ?>