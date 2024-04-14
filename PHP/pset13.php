<?php
$cookieName = "cookie_name";
$cookieValue = "value";
$expireTimestamp = strtotime("+2 months +5 days");

setcookie($cookieName, $cookieValue, $expireTimestamp, "/", "example.com", true); //xxxx
?>


<?php
// Sample cookies array
$_COOKIE['site'] = [
    'color' => 'blue',
    'font' => 'Swat',
    'layout' => 'boxed'
];

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// Print the message using values from cookies
echo "Your Color Is {$_COOKIE['site']['color']} And Your Font Is {$_COOKIE['site']['font']}";


/*
Array
(
  [site] => Array
    (
      [color] => blue
      [font] => Swat
      [layout] => boxed
    )
)
"Your Color Is blue And Your Font Is Swat"
*/
?>


<?php
// Sample cookies array
$_COOKIE['site'] = [
    'color' => 'blue',
    'font' => 'Swat',
    'layout' => 'boxed'
];

// Remove the 'layout' key from the cookies array
unset($_COOKIE['site']['layout']);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "Your Color Is {$_COOKIE['site']['color']} And Your Font Is {$_COOKIE['site']['font']}";
?>


<?php
// Loop through existing cookies
foreach ($_COOKIE as $cookieName => $cookieValue) {
    // Update the expiration time to session end
    setcookie($cookieName, $cookieValue, 0, "/");
} //xx
?>