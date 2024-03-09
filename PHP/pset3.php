<?php $username = "Elzero" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $username ?> Courses">
    <title>Welcome To <?php echo $username ?> Courses</title>
  </head>
  <body>
    <h1><?php echo $username ?> Courses</h1>
    <p>Here In <?php echo $username ?> Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username ?> Courses Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username ?> Courses</footer>
  </body>
</html>


<?php
  $name = "elzero";
  $$name = "Web";

  echo $$name; //method 1
  echo '<br>';
  echo $elzero; //method 2
  echo '<br>';
  echo "${$name}"; //method 3
  echo '<br>';
  echo ${$name}; //method 4
  echo '<br>';
  echo ${"elzero"}; //method 5
  ?>


<?php
  $a = 200;
  $b = &$a;
  $a = 100;
  
  echo $b; // 100
?>


<?php
 echo $_SERVER['DOCUMENT_ROOT']; 
 echo '<br>';
 echo $_SERVER["SERVER_NAME"]; 
 echo '<br>';
 echo $_SERVER["SystemRoot"]; 
 echo '<br>';
 echo $_SERVER['OPENSSL_CONF']; 
 ?>


<?php
/*
1- abstract
2- and
3- array
4- as
5- break
6- case
7- catch
8- class
9- clone
10- const
*/
 ?>


<?php
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;

/* "60"
"C:\xampp\htdocs\elzero\index.php"
"C:\xampp\htdocs\elzero"
*/
 ?>