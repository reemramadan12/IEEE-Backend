<?php
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Logic operations to replace characters in the string
if ($num_one === -1) {
    $str = str_replace($let_one, "", $str);
}

if ($num_two === 2.5) {
    $str = str_replace($let_two, "", $str);
}

echo $str; // Elzero
?>


<?php
$str = "Orezle";

echo ucfirst(substr_replace(strrev($str), "o", -1)); // Elzero
?>


<?php
$str = 'aAa';
$num = 3;
$char = "_";

echo strtolower(str_pad(str_repeat(strtolower($str) . $char, $num), $num * strlen($str) + ($num - 1), $char)); 
//aaa_aaa_aaa_
?>


<?php
$str = "<div><b>Elzero</b></div>";

echo htmlspecialchars(str_replace(["<div>", "</div>"], "", $str)); // Output: <b>Elzero</b>
?>


<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $o);//0
echo "<br>";
echo substr_count($str, $e); //2
?>


<?php
$chars = ["E", "l", "z", "e", "r", "o"];
echo '"' . implode("", $chars) . '"'; // "Elzero"
?>


<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$result = "";
foreach ($chars as $char) {
    if (is_string($char)) {
        $result .= strtolower($char);
    }
}
echo ucfirst($result);
?>