<?php
echo (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5); // 50
echo '<br>';
echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer
?>


<?php
echo gettype(100); // Method One
echo '<br>';
var_dump(100); // Method Two
echo '<br>';
echo get_debug_type(100);// Method Three
?>


<?php
echo "Hello \"Elzero\" \\\ \"\"\" We Love \"$\$PHP \"";
/*another solution
echo ' Hello "Elzero" \\\ """ We Love "$$PHP" '; 
*/
// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
?>


<?php
echo nl2br("We \n Love \n Elzero \n Web \n School");

/* Needed Output
We
Love
Elzero
Web
School
*/
?>


<?php
echo nl2br(<<<'Now'
Hello " 'Elzero' "
We Love $Programming$
Languages Specially "PHP"
Now);
/*Needed Output
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
*/
?>


<?php
$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

/* Needed Output
Hello \PHP\ We Love Programming
*/
?>


<?php
echo 1 + (int)"Hello PHP";
echo '<br>';
echo gettype(1 + (int)"Hello PHP");

/* Needed Output
1
integer
*/
?>


<?php
echo '<pre>'; 
print_r([
    "Frontend" => [
        0 => "HTML",
        1 => "CSS",
        "JS" => [
            "Vuejs" => [
                "2" => "v2",
                "3" => "v3"
            ],
            0 => "Reactjs",
            1 => "Svelte"
            
        ]
        ],
    "Backend" =>[
        0 => "PHP",
        1 => "MYSQL",
        2 => "Security"
    ],
    0 => "Git",
    1 => "Github",
    "Testing" => [
        0 => "Unit Testing",
        1 => "End To End",
        2 => "Integration"
    ]

]);
echo '</pre>'; 
/* Array
(
  [FrontEnd] => Array
    (
      [0] => HTML
      [1] => CSS
      [JS] => Array
        (
          [Vuejs] => Array
            (
              [2] => v2
              [3] => v3
            )

          [0] => Reactjs
          [1] => Svelte
        )
    )

  [BackEnd] => Array
    (
      [0] => PHP
      [1] => MySQL
      [2] => Security
    )

  [0] => Git
  [1] => Github
  [Testing] => Array
    (
      [0] => Unit Testing
      [1] => End To End
      [2] => Integration
    )
)
*/
?>
