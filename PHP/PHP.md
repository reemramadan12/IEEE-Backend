# PHP
1. [What is PHP](#what-is-php)
1. [What are the three main error types in PHP](#what-are-the-three-main-error-types-in-php)
1. [Echo vs print](#echo-vs-print) 
1. [Sensitivity in PHP](#sensitivity-in-php)
1. [Programming language vs scripting langauge](#programming-language-vs-scripting-langauge)
1. [Dynamically typed vs statically typed language](#dynamically-typed-vs-statically-typed-language)
1. [Assign by value vs assign by reference](#assign-by-value-vs-assign-by-reference)

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

---
### resources :-
1. [What is PHP?](https://www.php.net/manual/en/intro-whatis.php)
1. [Three main errors in PHP.](https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/)
1. [Echo vs. print.](https://www.w3schools.com/php/php_echo_print.asp#:~:text=echo%20and%20print%20are%20more,print%20can%20take%20one%20argument.)
1. [Sensitivity in PHP.](https://www.phptutorial.net/php-tutorial/php-syntax/#:~:text=Summary-,PHP%20is%20partially%20case%2Dsensitive.,make%20the%20code%20more%20readable.)
1. [Programming language vs scripting langauge.](https://www.unosquare.com/blog/scripting-and-programming-languages-differences-advantages-and-optimal-use-cases/#:~:text=Scripting%20languages%20are%20used%20for,systems%20and%20enterprise%2Dlevel%20software.)
1. [Dynamically typed vs statically typed language.](https://www.bairesdev.com/blog/static-vs-dynamic-typing/)
1. [Assign by value vs assign by reference.](https://chat.openai.com/c/58e524b6-9ab2-45c5-9c11-6f8d8a180cf2)
