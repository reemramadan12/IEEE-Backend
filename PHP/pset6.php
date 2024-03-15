<?php
$index = 10;
for(;$index >= 1; $index--){
    echo "$index <br>";
}
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
 ?>


<?php
$index = 0;

//using for loop
for ($index = 2 ; $index <= 20 ; $index += 2) { 
    echo "$index <br>";
}

//using while
while ($index <= 20) {
    if ($index != 0) {
        echo "$index <br>";
    }
    $index += 2;
}

//using do while
do {
    if ($index != 0) {
    echo "$index <br>";
    }
    $index += 2;
} while ($index <= 20);

// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20
 ?>


<?php
$num = 2;
while ($num < 520) {
  echo $num - 1 . "<br>";
  $num = ($num * 2) + 1;
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382
 ?>


<?php
$start = 10;
$end = 0;
$stop = 3;

for ($start = 10; $start >= $stop ; $start--) { 
    if ($start == 10)
      echo "$start <br>";
    else {
      if($start == $stop - 1){
        break;
      }  
      echo "$end$start <br>";
    }
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
 ?>


<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($start = 0; $start < count($mix); $start++) {
  if (is_numeric($mix[$start]) && $mix[$start] > 1) {
    echo "$mix[$start] <br>";
  }
}
// Output
// 2
// 3
// 4
 ?>


<?php
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $names => $pounds) {
    echo "The Name Is $names And I need $pounds Pound From Him <br>";
}
// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"
 ?>


<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$numbersCount = 0;
$lettersCount = 0;

foreach ($mix as $numbers) {
  if (is_numeric($numbers)) {
    echo "$numbers <br>" ;
    $numbersCount++;
  } else {
    $lettersCount++;
  }
}
echo "$numbersCount Numbers Printed <br>";
echo "$lettersCount Letters Ignored <br>";
// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
 ?>


<?php
$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $number) {
    if($number % 2 == 0){
        echo $number / 2 . "<br>";
    }
}
// Output
// 6
// 10
// 15
 ?>


<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for ($i = 0; $i < count($names); $i++) {
  if ($names[$i] === "Sayed" || $names[$i] === "Osama") {
    echo  $names[$i] . "<br>";
  }
}
// Output
// "Sayed"
// "Osama"
 ?>


<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
$length = count($nums);

foreach ($nums as $index => $num) {
  $oppositeIndex = $length - $index - 1;
  $oppositeNum = $nums[$oppositeIndex];
  
  echo $num . ' + ' . $oppositeNum . ' = ' . ($num + $oppositeNum) . "<br>";;
}

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
 ?>