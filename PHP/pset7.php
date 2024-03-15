<?php
function greeting($name, $gender = null) {
    if ($gender === 'Male') {
      echo "Hello Mr $name <br>";
    } elseif ($gender === 'Female') {
      echo "Hello Miss $name <br>";
    } else {
      echo "Hello $name <br>";
    }
  }
  
  // Needed Output
  echo greeting("Osama", "Male"); // Hello Mr Osama
  echo greeting("Eman", "Female"); // Hello Miss Eman
  echo greeting("Sameh"); // Hello Sameh
 ?>


<?php
function get_arguments() {

    foreach (func_get_args() as $arg) {
        echo $arg . " ";
    }
     echo "<br>";
}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
 ?>


<?php
function sum_all() {
    $sum = 0;
    foreach (func_get_args() as $num) {
        if ($num === 5) {
            continue; //ignore number 5
        } elseif ($num === 10) {
            $num = 20; //replace 10 by 20
        }
        $sum += $num;
    }
    return $sum;
}

//Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo "<br>";
echo sum_all(5, 10, 5, 10); // 40
 ?>


<?php
function multiply() {
    $result = 1;

    foreach (func_get_args() as $arg) {
        if (is_numeric($arg)) {
            if (is_float($arg)) {
                $arg = intval($arg);
            }
            $result *= $arg;
        }
    }

    return $result;
}

// Needed Output
echo multiply(10, 20); // 200
echo "<br>";
echo multiply("A", 10, 30); // 300
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000
 ?>


<?php
function check_status($a, $b, $c) {
    $name = '';
    $age = '';
    $status_message = '';

    foreach ([$a, $b, $c] as $arg) {
        switch (gettype($arg)) {
            case 'string':
                $name = $arg;
                break;
            case 'integer':
            case 'double':
                $age = $arg;
                break;
            case 'boolean':
                $status_message = $arg ? 'You Are Available For Hire' : 'You Are Not Available For Hire';
                break;
        }
    }

    return "Hello $name, Your Age Is $age, $status_message";
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
 ?>


<?php
function calculate($num1, $num2, $operation = 'add') {
    switch ($operation[0]) {
        case 'a': 
            return $num1 + $num2;
            break;
        case 's': 
            return $num1 - $num2;
            break;
        case 'm':
            return $num1 * $num2;
            break;
        default:
            return "Error: Invalid operation!";
            break;
    }
}

// Needed Output
echo calculate(10, 20); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200
 ?>


<?php
function calculate(int $num_one, int $num_two): float {
    return $num_one + $num_two;
  }

  echo calculate(20, 10); // 30
  echo "<br>";
  echo gettype(calculate(20, 10)); // Double
 ?>


<?php
$message = "Hello";

$Hello = function ($name) use ($message) {
    return $message . " " . $name;
};
echo $Hello("Osama"); // Hello Osama
 ?>


<?php
//Anonymous Function
$greet = function($name) {
    return "Greetings $name";
};

//Arrow Function
$greet = fn($name) => "Greetings $name";

echo $greet("Osama"); // Greetings Osama
 ?>