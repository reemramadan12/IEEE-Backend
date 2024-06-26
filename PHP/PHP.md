# PHP
1. [What is PHP](#what-is-php)
1. [What are the three main error types in PHP](#what-are-the-three-main-error-types-in-php)
1. [Echo vs print](#echo-vs-print) 
1. [Sensitivity in PHP](#sensitivity-in-php)
1. [Programming language vs scripting langauge](#programming-language-vs-scripting-langauge)
1. [Dynamically typed vs statically typed language](#dynamically-typed-vs-statically-typed-language)
1. [Assign by value vs assign by reference](#assign-by-value-vs-assign-by-reference)
1. [What are the different types of loop in PHP?](#what-are-the-different-types-of-loop-in-php)
1. [What is the difference between for and foreach loop in PHP?](#what-is-the-difference-between-for-and-foreach-loop-in-php)
1. [What are superglobals in PHP?](#what-are-superglobals-in-php)
1. [Differentiate between GET and POST methods in PHP](#differentiate-between-get-and-post-methods-in-php)
1. [What are closures in PHP?](#what-are-closures-in-php)
1. [What are the steps to create a new database using postgreSQL and PHP?](#what-are-the-steps-to-create-a-new-database-using-postgresql-and-php)
1. [What are cookies? How to create cookies in PHP?](#what-are-cookies-how-to-create-cookies-in-php)
1. [What is the difference between the include() and require() functions?](#what-is-the-difference-between-the-include-and-requirefunctions)
----

## What is PHP?
**PHP (recursive acronym for PHP: Hypertext Preprocessor)** is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.

---
## What are the three main error types in PHP?
In **PHP**, all types of errors can be classified into three main categories: syntax errors, runtime errors, and logical errors.

- *Syntax errors*: Syntax errors are caused by mistakes in the code syntax. These errors occur when the PHP parser encounters an unexpected or incorrect statement or expression. For example, a missing semicolon or a misspelled function name can cause a syntax error.

- *Runtime errors*: Runtime errors occur during the execution of the code. These errors are usually caused by factors such as incorrect function arguments, incorrect variable types, or memory-related issues. Examples of runtime errors include division by zero, undefined function calls, or array out-of-bounds errors.

- *Logical errors*: Logical errors occur when the code does not behave as expected, even though it is syntactically and semantically correct. These errors are usually caused by incorrect or incomplete logic in the code.

---
## Echo vs print :-
 **echo** and **print** are more or less the same. They are both used to output data to the screen.

The differences are small: **echo has no return value** while **print has a return value of 1** so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. **echo is marginally faster than print**.

---
## Sensitivity in PHP :-
- PHP is **partially case-sensitive**.
- PHP constructs, function names, class names are case-insensitive, whereas variables are case-sensitive.
- A statement ends with a semicolon (;).
- Whitespace and line breaks don’t matter in PHP; do leverage them to make the code more readable.
---
## Programming language vs scripting langauge :-

The primary distinction between these two types of languages is that the former is typically interpreted, meaning that the code is executed line by line, rather than compiled into machine code and run as an executable file. Hence, with **scripting languages, programmers can make changes to the code and test it without having to recompile the entire program.**

Compiled programming languages, on the other hand, are translated into machine code and saved as an executable file, which can be run without the need for an interpreter. Programming languages are often more powerful and efficient than scripting languages, but they can also be more complex and harder to learn. Examples of compiled programming languages include C, Java, and C++.

**Scripting languages are used for smaller tasks**, whereas programming languages help build large and complex software applications, such as operating systems and enterprise-level software.

### Optimal scripting use case examples :-
| Use case | Description |
| :------- | :---------- |
| Task Automation |  Automate repetitive tasks, such as batch processing of files, generating reports, and performing data manipulations. |
| Glue Code | Stitch together different software systems, such as by combining the output of one program with the input of another or automating the execution of multiple programs in sequence. |
| One-off Tasks | Perform a quick calculation, test a code snippet, and explore data. |
| Dynamic Web | Manipulate web pages, such as by extracting data, filling in forms, and clicking buttons automatically.
| Task Scheduling | Run a script at a specific time, or on a specific schedule. |
| System Administration | Automate tasks like creating backups, setting up new users, and monitoring systems. |
| Shell Scripting | Write shell scripts (scripts that run in a command-line shell environment) to automate setting up development environments, running tests, and deploying software. |
---

### Optimal programming use case examples :-
| Use case | Description |
| :------- | :---------- |
| Application Development | Create everything from simple desktop applications to large-scale enterprise systems. | 
| System Programming | Develop operating systems, device drivers, or other low-level system components.|
| Database Programming | Query databases, update data, and develop database applications.
| Mobile Development | Build native applications for Android and iOS devices. | 
---
## Dynamically typed vs statically typed language :-
Static typing ensures a higher level of type safety by catching type-related errors at compile-time. Dynamic typing sacrifices some type safety in favor of flexibility and ease of use.

### static vs. dynamic typing :-
| Aspect | Static typing | Dynamic typing |
| :----- | :------------ | :------------- |
| Determination Time | Determined at compile-time. |	Determined at runtime. 
| Error Detection | Errors caught during compilation. |	Errors may appear during program execution. 
| Performance | Typically faster due to compile-time optimizations.	| Possible overhead from runtime type-checks. 
| Coding Verbosity | Requires explicit type declarations.	| Concise; types aren’t specified explicitly. 
| Flexibility | Variables bound to one type. | Variable types can change during execution.
| Type Safety | High type safety through early error detection. |Some type safety traded off for flexibility. |
___

## Assign by value vs assign by reference :-

In PHP, variables can be assigned either by value or by reference. Here's an explanation of both concepts:

### Assign by Value :-
When you assign a variable by value in PHP, **you're essentially creating a copy of the original value**. Any changes made to the copied variable won't affect the original variable. This is the default behavior for assignment in PHP.

#### Example:
```php
$value1 = 10;
$value2 = $value1; // $value2 is assigned the value of $value1 (10)

$value2 = 20; // Changing $value2 won't affect $value1

echo $value1; // Outputs: 10
echo $value2; // Outputs: 20
```
### Assign by Reference :-
When you assign a variable by reference in PHP, **you're creating a reference or alias to the original variable**. Any changes made to the variable through its reference will directly affect the original variable.

#### Example:
```php
$value1 = 10;
$value2 =& $value1; // $value2 is assigned as a reference to $value1

$value2 = 20; // Changing $value2 also changes $value1

echo $value1; // Outputs: 20
echo $value2; // Outputs: 20
```
In the second example, **when $value2 is assigned by reference to $value1, changing the value of $value2 also changes the value of $value1**. This is because $value2 is just a reference pointing to the same memory location as $value1, so modifying $value2 directly affects $value1.

**Assigning by reference is done using the & symbol before the variable name**, as seen in the example above `$value2 =& $value1`.

----
## What are the different types of loop in PHP?
Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

**Loops are used to execute the same block of code again and again, as long as a certain condition is true.**

In PHP, we have the following loop types:

- `while` - loops through a block of code as long as the specified condition is true.
- `do...while` - loops through a block of code once, and then repeats the loop as long as the specified condition is true.
- `for` - loops through a block of code a specified number of times.
- `foreach` - loops through a block of code for each element in an array.

### Example on while loop:-
Print $i as long as $i is less than 6:
```php
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
```
----
## What is the difference between for and foreach loop in PHP?
### 1- For Loop:-
**The for loop works at the end of the given condition**. It is used for the implementation of variables and works in a single way. The for loop **does not work in the case of associative arrays**. A for loop basically consists of three portions or parts. 

- A variable is initialized with a value.
- The variable is subjected to the condition to which it is compared.
- Increment/decrement loop counter.
```php
for(expr1; expr2; expr3) {
    // Perform action
}
```
Example: This example illustrates the basic usage of the for Loop.

```php
<?php
 
// Declaring an array
$arr = array(1, 2, 3, 4, 5);
 
// Looping over array
for($i = 0; $i < 5; $i++) {
 
// Accessing individual elements
    echo($arr[$i] . "  ");
}
 
?>
```
Output is : 1 2 3 4 5.

---
### 2- Foreach Loop:-
**The foreach loop works at the end of the array count**. This loop **can work with variables as well as associative arrays**. Therefore, this loop can be implemented in more than one way. The foreach loop is much better and performs better in comparison to the for loop.
```php 
foreach ($array as $value) {
    // Perform action
}
```
Example 1: This example illustrates the basic usage of the Foreach Loop.
```php
<?php
 
// Declaring an array
$arr = [1, 2, 3, 4, 5];
 
// Looping over array
foreach ($arr as $val) {
    // Accessing individual elements
    echo $val . "  ";
}
 
?>
```
Output is : 1 2 3 4 5.

-----
## What are superglobals in PHP?

Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

- `$GLOBALS`
- `$_SERVER`
- `$_REQUEST`
- `$_POST`
- `$_GET`
- `$_FILES`
- `$_ENV`
- `$_COOKIE`
- `$_SESSION`

---

## Differentiate between GET and POST methods in PHP
| Parameter | GET | POST |
| :-------- | :-- | :--- |
| Visibility | Data is appended to the URL and visible in the browser's address bar. | Data is included in the request body and not visible in the URL. 
| Data Length | Limited by the URL length, which can vary by browser and server. Typically, around 2048 characters. | No inherent limit on data size, allowing for large amounts of data to be sent.
| Security | Less secure due to visibility in the URL. Sensitive data can be easily exposed in browser history, server logs, etc. | More secure for transmitting sensitive data since it's not exposed in the URL.
| Use Case | Ideal for simple data retrieval where the data can be bookmarked or shared. | Suited for transactions that result in a change on the server, such as updating data, submitting forms, and uploading files.
| Idempotency | Idempotent, meaning multiple identical requests have the same effect as a single request. |Non-idempotent, meaning multiple identical requests, may have different outcomes.
| Caching | Can be cached by the browser and proxies. | Not cached by default since it can change the server state.
| Data Type | Only ASCII characters are allowed. Non-ASCII characters must be encoded. | Can handle binary data in addition to text, making it suitable for file uploads.
| Back/Forward Buttons | Reloading a page requested by GET does not usually require browser confirmation. | Reloading a page can cause the browser to prompt the user for confirmation to resubmit the POST request.
| Bookmarks and Sharing | Easily bookmarked and shared since the data is part of the URL. | Cannot be bookmarked or shared through the URL since the data is in the request body.
| Impact on Server | Generally used for retrieving data without any side effects on the server. | Often causes a change in server state (e.g., database updates) or side effects. |

-----
## What are closures in PHP?
In PHP, closures (also known as anonymous functions) are a powerful feature that allows you to create functions without giving them a name. They are useful for tasks like callback functions and are commonly used in event handling, asynchronous programming, and more.

Here's a breakdown of closures in PHP:

1. **Anonymous Functions**: Closures are defined using the `function` keyword followed by a pair of parentheses `( )`, which may contain arguments, and then a pair of curly braces `{ }` enclosing the function body.

2. **Capturing Variables**: Closures can capture variables from the surrounding scope. This means they have access to variables defined outside of their own scope. This feature is called "variable binding" or "closure binding." 

   ```php
   $name = "John";

   $greeting = function() use ($name) {
       echo "Hello, $name!";
   };

   $greeting(); // Output: Hello, John!
   ```

3. **Returning Closures**: Closures can be returned from functions, allowing for more flexible and powerful coding patterns.

   ```php
   function greetingClosure($name) {
       return function() use ($name) {
           echo "Hello, $name!";
       };
   }

   $greeting = greetingClosure("John");
   $greeting(); // Output: Hello, John!
   ```

4. **Passing Closures as Arguments**: Closures can be passed as arguments to other functions. This is particularly useful for defining callback functions.

   ```php
   function sayHello($callback) {
       $callback();
   }

   sayHello(function() {
       echo "Hello, world!";
   });
   ```

5. **Arrow Functions (PHP 7.4+)**: PHP 7.4 introduced arrow functions, which are a more concise syntax for writing closures that have implicit return values. They offer a shorter syntax for simple, single-expression functions.

   ```php
   $greet = fn($name) => "Hello, $name!";
   echo $greet("John"); // Output: Hello, John!
   ```

Closures in PHP provide a convenient way to work with functions and callbacks, making code more concise and expressive.

---
## What are the steps to create a new database using postgreSQL and PHP?

To create a new database using PostgreSQL and PHP, you'll need to follow these steps:

1. **Install PostgreSQL**: Ensure that PostgreSQL is installed on your system. You can download and install PostgreSQL from the official website (https://www.postgresql.org/download/) or use a package manager like Homebrew (for macOS) or apt (for Debian-based Linux distributions).

2. **Set Up PostgreSQL**: After installation, make sure PostgreSQL is running. You may need to start the PostgreSQL service if it's not already running. You can do this using the appropriate command for your operating system.

3. **Install PHP PostgreSQL Extension (if not already installed)**: If you haven't already installed the PostgreSQL extension for PHP, you can do so using the package manager for your system or by compiling PHP with PostgreSQL support. For example, on Ubuntu, you can install the extension with:

   ```
   sudo apt-get install php-pgsql
   ```

4. **Connect to PostgreSQL**: In your PHP script, establish a connection to the PostgreSQL database using the `pg_connect()` function or a similar method. Make sure to provide the appropriate hostname, username, password, and database name.

   ```php
   $host = "localhost";
   $port = "5432";
   $dbname = "your_database";
   $user = "your_username";
   $password = "your_password";

   $connection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
   if (!$connection) {
       die("Connection failed: " . pg_last_error());
   }
   ```

5. **Create a New Database**: Once connected, execute a SQL command to create a new database. You can use the `pg_query()` function to send SQL queries to the PostgreSQL server.

   ```php
   $query = "CREATE DATABASE new_database";
   $result = pg_query($connection, $query);
   if (!$result) {
       die("Database creation failed: " . pg_last_error());
   } else {
       echo "Database created successfully.";
   }
   ```

6. **Close Connection**: After creating the database, it's good practice to close the connection to PostgreSQL using the `pg_close()` function.

   ```php
   pg_close($connection);
   ```

These steps should guide you through the process of creating a new PostgreSQL database using PHP. Make sure to handle errors appropriately and secure your database connection by avoiding hardcoding sensitive information in your PHP scripts.

----
## What are cookies? How to create cookies in PHP?
PHP transparently supports HTTP cookies. **Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users**. You can set cookies using the `setcookie()` or `setrawcookie()` function. Cookies are part of the HTTP header, so `setcookie()` must be called before any output is sent to the browser. This is the same limitation that `header()` has. You can use **the output buffering functions** to delay the script output until you have decided whether or not to set any cookies or send any headers.

Any cookies sent to server from the client will automatically be included into a `$_COOKIE` auto-global array if `variables_order` contains "C". If you wish to assign multiple values to a single cookie, just add `[]` to the cookie name.

----
## What is the difference between the include() and require()functions?
| include() | require() |
| :-------- | :-------- |
| The `include()` function does not stop the execution of the script even if any error occurs. | The `require()` function will stop the execution of the script when an error occurs.
| The `include()` function does not give a fatal error. | The `require()` function gives a fatal error.
| The `include()` function is mostly used when the file is not required and the application should continue to execute its process when the file is not found. | The `require()` function is mostly used when the file is mandatory for the application. 
| The `include()` function will only produce a warning  **(E_WARNING)** and the script will continue to execute. | The `require()` will produce a fatal error **(E_COMPILE_ERROR)** along with the warning and the script will stop its execution.
| The `include()` function generate various functions and elements that are reused across many pages taking a longer time for the process completion.	| The `require()` function is more in recommendation and considered better whenever we need to stop the execution incase of availability of file, it also saves time avoiding unnecessary inclusions and generations.

---
### resources :-
1. [What is PHP?](https://www.php.net/manual/en/intro-whatis.php)
1. [Three main errors in PHP.](https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/)
1. [Echo vs. print.](https://www.w3schools.com/php/php_echo_print.asp#:~:text=echo%20and%20print%20are%20more,print%20can%20take%20one%20argument.)
1. [Sensitivity in PHP.](https://www.phptutorial.net/php-tutorial/php-syntax/#:~:text=Summary-,PHP%20is%20partially%20case%2Dsensitive.,make%20the%20code%20more%20readable.)
1. [Programming language vs scripting langauge.](https://www.unosquare.com/blog/scripting-and-programming-languages-differences-advantages-and-optimal-use-cases/#:~:text=Scripting%20languages%20are%20used%20for,systems%20and%20enterprise%2Dlevel%20software.)
1. [Dynamically typed vs statically typed language.](https://www.bairesdev.com/blog/static-vs-dynamic-typing/)
1. [Assign by value vs assign by reference.](https://chat.openai.com/c/58e524b6-9ab2-45c5-9c11-6f8d8a180cf2)
1. [Different types of loop in PHP.](https://www.w3schools.com/php/php_looping_while.asp)
1. [The difference between for and foreach loop in PHP.](https://www.geeksforgeeks.org/what-is-the-difference-between-for-and-foreach-loop-in-php/)
1. [Superglobals in PHP.](https://www.w3schools.com/php/php_superglobals.asp)
1. [GET and POST methods in PHP.](https://www.shiksha.com/online-courses/articles/difference-between-get-and-post-in-php-blogId-155719#1)
1. [Closures in PHP.](https://chat.openai.com/c/32bf5a29-c50a-44a8-9ba1-8df9040c520b)
1. [Steps to create a new database using postgreSQL and PHP.](https://chat.openai.com/c/32bf5a29-c50a-44a8-9ba1-8df9040c520b)
1. [What are cookies? How to create cookies in PHP?](https://www.php.net/manual/en/features.cookies.php#:~:text=Cookies%20are%20a%20mechanism%20for,is%20sent%20to%20the%20browser.)
1. [The difference between the include() and require() functions.](https://www.geeksforgeeks.org/difference-between-require-and-include-in-php/)
